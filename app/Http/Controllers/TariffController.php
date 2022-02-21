<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tariff;
use App\Transaction as TransactionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
/*use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;*/

/*use \Cardinity\Exception\Declined;
use \Cardinity\Exception\ValidationFailed;
use \Cardinity\Exception\InvalidAttributeValue;*/
use \Cardinity\Client;
use \Cardinity\Method\Payment\Create;
use \Cardinity\Method\Payment\Finalize;
use \App\PayLog;
use Illuminate\Support\Facades\Log;

/** Paypal Details classes **/
class TariffController extends Controller
{
    // private $api_context;
	
	public function tariffDetail($postId, $plan, Request $request)
	{
		if(!in_array($plan, ['diamond', 'gold', 'silver']))
			return redirect('/posts');

		return view('pages.tariffpay', compact('postId', 'plan'));
	}
	
	public function payCardResult(Request $request)
	{
		Log::channel('payed')->info('payCardResult: start', [$request->all()]);

		$client = Client::create([
            'consumerKey' => env('CARDINITY_KEY', ''),
            'consumerSecret' => env('CARDINITY_SECRET', '')
		]);
		
		$orderNumber = null;

		if(
			isset($request->threeDSSessionData)
			&& strlen($request->threeDSSessionData) > 0
		)
			$orderNumber = $request->threeDSSessionData;
		else if(
			isset($request->MD)
			&& strlen($request->MD) > 0
		)
			$orderNumber = $request->MD;
		
		if(!$orderNumber)
		{
			Log::channel('payed')->info('payCardResult: not isset orderNumber');
			return redirect('/posts/pay-failure');
		}

		$tariff = Tariff::where('order_number', $orderNumber)->first();

		if(!$tariff)
		{
			Log::channel('payed')->info('payCardResult: not isset tariff');
			return redirect('/posts/pay-failure');
		}

        $errors = [];
        
		try {
			if(
				isset($request->cres)
				&& strlen($request->cres) > 0
			)
			{
				Log::channel('payed')->info('payCardResult: version 2');
				/** @type Cardinity\Method\Payment\Payment */
				$method = new Finalize(
					$tariff->pay_id, // payment object received from API call
					$request->cres, // payment object received from API call
					true // BOOL `true` to enable 3D secure V2 parameters
				);
				// again use same try ... catch block
				$payment = $client->call($method);
			}
			else if(
				isset($request->PaRes)
				&& strlen($request->PaRes) > 0
			)
			{
				Log::channel('payed')->info('payCardResult: version 1');

				$method = new Finalize($tariff->pay_id, 'PARES_RECEIVED_FROM_ACS');
				/** @type Cardinity\Method\Payment\Payment */
				$payment = $client->call($method);
			}
			

			$status = $payment->getStatus();

			Log::channel('payed')->info('payCardResult: status', [$status]);

			if ($status == 'approved') {
				self::payApprovedSave(
					$tariff->post_id,
					$tariff->name,
					$tariff->pay_id,
					$tariff->order_number
				);

				return redirect('/posts/pay-success');
			} 
			elseif ($status == 'declined')
			{
				return redirect('/posts/pay-failure');
			}
			elseif ($status == 'pending')
			{
				if ($payment->isThreedsV2()) 
				{	
					// $auth object for data required to finalize payment
					$auth = $payment->getThreeds2Data();

					Log::channel('payed')->info('Response version: 2', [$payment->getId(), $auth->getAcsUrl(), $auth->getCReq(), $request->all()]);
					?>
					<form id="ThreeDForm" method="POST" action="<?=$auth->getAcsUrl()?>">
						<input type="hidden" name="creq" value="<?=$auth->getCReq()?>" />
						<input type="hidden" name="threeDSSessionData" value="<?=$tariff->order_number?>" />
					</form>
					<script>
						document.getElementById('ThreeDForm').submit();
					</script>
					<?php
					exit();
				}
				elseif ($payment->isThreedsV1()) 
				{
					// Retrieve information for 3D-Secure V1 authorization
					$url = $payment->getAuthorizationInformation()->getUrl();
					$data = $payment->getAuthorizationInformation()->getData();
					Log::channel('payed')->info('Response version: 1', [$payment->getId(), $url, $data, $request->all()]);
					// finalize process should be done here.
					?>
					<form id="ThreeDForm" method="POST" action="<?=$url?>">
					  <input type="hidden" name="PaReq" value="<?=$data?>" />
					  <input type="hidden" name="TermUrl" value="https://<?=$request->server('HTTP_HOST')?>/t7x4jwvkt6nhkv8fzyrm97fqrhdn5nx2m5m2/cardinity-back"" />
					  <input type="hidden" name="MD" value="<?=$tariff->order_number?>" />
					</form>
					<script>
						document.getElementById('ThreeDForm').submit();
					</script>
					<?php
					exit();
				}
			}
		}
		catch (\Cardinity\Exception\InvalidAttributeValue $exception) {
			foreach ($exception->getViolations() as $key => $violation) {
				array_push($errors, $violation->getPropertyPath() . ' ' . $violation->getMessage());
			}
		} catch (\Cardinity\Exception\ValidationFailed $exception) {
			// dd($exception);
			foreach ($exception->getErrors() as $key => $error) {
				array_push($errors, $error['message']);
			}
		} catch (\Cardinity\Exception\Declined $exception) {
			foreach ($exception->getErrors() as $key => $error) {
				array_push($errors, $error['message']);
			}
		} catch (\Cardinity\Exception\NotFound $exception) {
			foreach ($exception->getErrors() as $key => $error) {
				array_push($errors, $error['message']);
			}
		} catch (\Exception $exception) {
            //$exception);
			$errors = [$exception->getMessage()];
		}
		if ($errors) {
           	Log::channel('payed')->info('payCardResult: ERROR', [$errors]);
			return redirect('/posts/pay-failure');
		}
	}
	
	public function payCard(Request $request) {
        $request->validate(['plan' => 'required']);
        $plan = $request['plan'];
        $price = 0;
		
        if ($plan == 'silver') {
            $price = Post::COST_SILVER;
        }
        if ($plan == 'gold') {
            $price = Post::COST_GOLD;
        }
        if ($plan == 'diamond') {
            $price = Post::COST_DIAMOND;
        }
		
		if($price <= 0)
		{
			Log::channel('payed')->info('ERROR PAYED: Price is empty', [$request->all()]);
			return ['type' => 'error', 'message' => 'Error del sistema'];
		}
		
        $client = Client::create([
            'consumerKey' => env('CARDINITY_KEY', ''),
            'consumerSecret' => env('CARDINITY_SECRET', '')
        ]);
		
		$orderNumber = self::generateOrderNumber();
		Log::channel('payed')->info('Generate order: ' . $orderNumber);

		$fields = [
			'amount' => floatval($price),
            'currency' => 'EUR',
            'settle' => true,
            'description' => $request['plan'],
            'order_id' => $orderNumber,
            'country' => 'ES',
            // 'type' => 'purchase',
            // 'live' => true,
            'payment_method' => Create::CARD,
			'payment_instrument' => [
				'pan' => isset($request['cardNumber']) ? str_replace(' ', '', $request['cardNumber']) : '', //'4111111111111111',
                'exp_year' => isset($request['cardYear']) ? (int)$request['cardYear'] : 0, //2016,
                'exp_month' => isset($request['cardMonth']) ? (int)$request['cardMonth'] : 0, //12,
                'cvc' => isset($request['cardCvv']) ? $request['cardCvv'] : '', //456,
                'holder' => isset($request['cardName']) ? $request['cardName'] : '', //'Mike Dough'
			],
			'threeds2_data' =>  [
				"notification_url" => "https://".$request->server('HTTP_HOST')."/t7x4jwvkt6nhkv8fzyrm97fqrhdn5nx2m5m2/cardinity-back", 
				"browser_info" => [
					"accept_header" => "text/html",
					"browser_language" => $request['browser_language'],
					"screen_width" => (int)$request['screen_width'],
					"screen_height" => (int)$request['screen_height'],
					'challenge_window_size' => "full-screen",
					"user_agent" => $request->server('HTTP_USER_AGENT'),
					"color_depth" => (int)$request['color_depth'],
					"time_zone" => (int)$request['time_zone']
				],
			],
		];
		
		$errors = [];
		
		try {
			
			$method = new Create($fields);
			$user = Auth::user();
			Log::channel('payed')->info('Send request: ', [$fields, $user->id]);
			/** @type Cardinity\Method\Payment\Payment */
			$payment = $client->call($method);
			$status = $payment->getStatus();

			Log::channel('payed')->info('Response status: ' . $status);

			if ($status == 'approved') {
				
				self::payApprovedSave(
					$request['postid'],
					$request['plan'],
					$payment->getId(),
					$orderNumber
				);

				return ['type' => 'ok', 'message' => 'Pago confirmado.'];
			} 
			elseif ($status == 'pending') {
				if ($payment->isThreedsV2()) 
				{	
					// $auth object for data required to finalize payment
					$auth = $payment->getThreeds2Data();

					Log::channel('payed')->info('Response version: 2', [$request['postid'], $payment->getId(), $auth->getAcsUrl(), $auth->getCReq()]);

					self::payPendingSave(
						$request['postid'],
						$request['plan'],
						$payment->getId(),
						$orderNumber
					);
					
					return [
						'type' => 'pending', 
						'pendingAcsUrl' => $auth->getAcsUrl(), 
						'pendingCreq' => $auth->getCReq(),
						'orderNumber' => $orderNumber
					];
				}
				elseif ($payment->isThreedsV1()) 
				{
					// Retrieve information for 3D-Secure V1 authorization
					$url = $payment->getAuthorizationInformation()->getUrl();
					$data = $payment->getAuthorizationInformation()->getData();

					Log::channel('payed')->info('Response version: 1', [$request['postid'], $payment->getId(), $url, $data]);

					self::payPendingSave(
						$request['postid'],
						$request['plan'],
						$payment->getId(),
						$orderNumber
					);

					// finalize process should be done here.
					/*?>
					
                    <?php*/
                    // Log::channel('payed')->info('ERROR PAYED: ', [$request, $url, $data]);
                    return [
						'type' => 'pending_v1', 
						'url' => $url, 
						'data' => $data,
						'orderNumber' => $orderNumber,
						'termUrl' => 'https://' . $request->server('HTTP_HOST') . '/t7x4jwvkt6nhkv8fzyrm97fqrhdn5nx2m5m2/cardinity-back'
					];
                }
                else
                {
                    Log::channel('payed')->info('ERROR PAYED: NO version 1 or 2', [$request->all()]);
                    return ['type' => 'error', 'message' => 'Pago rechazado'];
                }
			}
			elseif ($status == 'declined')
			{
				return ['type' => 'error', 'message' => 'Pago rechazado'];
			}
		} catch (\Cardinity\Exception\InvalidAttributeValue $exception) {
			foreach ($exception->getViolations() as $key => $violation) {
				array_push($errors, $violation->getPropertyPath() . ' ' . $violation->getMessage());
			}
		} catch (\Cardinity\Exception\ValidationFailed $exception) {
			foreach ($exception->getErrors() as $key => $error) {
				array_push($errors, $error['message']);
			}
		} catch (\Cardinity\Exception\Declined $exception) {
			foreach ($exception->getErrors() as $key => $error) {
				array_push($errors, $error['message']);
			}
		} catch (\Cardinity\Exception\NotFound $exception) {
			foreach ($exception->getErrors() as $key => $error) {
				array_push($errors, $error['message']);
			}
		} catch (\Exception $exception) {
			$errors = [$exception->getMessage()];
		}
		if ($errors) {
			Log::channel('payed')->info('ERROR PAYED:', [$errors, $request->all()]);
			return ['type' => 'error', 'message' => $errors[0], 'errors' => $errors];
		}
    }
	
	private function payPendingSave($postId, $plan, $payId, $orderNumber)
	{
		Log::channel('payed')->info('payPendingSave: start', [$postId, $plan, $payId, $orderNumber]);

		$user = Auth::user();
		
		$price = 0;
		
        if ($plan == 'silver') {
            $price = Post::COST_SILVER;
        }
        if ($plan == 'gold') {
            $price = Post::COST_GOLD;
        }
        if ($plan == 'diamond') {
            $price = Post::COST_DIAMOND;
        }
		
        $tariff = new Tariff;
        $tariff->currency = 'EUR';
        $tariff->price = $price;
        $tariff->user_id = $user->id;
        $tariff->post_id = $postId;
        $tariff->name = $plan;
        $tariff->order_number = $orderNumber;
        $tariff->active = false;
        $tariff->status = 'wait';
		$tariff->pay_id = $payId;
		$tariff->save();
		
		Log::channel('payed')->info('payPendingSave: finish', [$tariff]);
	}
	
	private function payApprovedSave($postId, $plan, $payId, $orderNumber)
	{
		Log::channel('payed')->info('payApprovedSave: start', [$postId, $plan, $payId, $orderNumber]);

		$post = Post::whereId($postId)->first();

		if(!$post)
		{
			Log::channel('payed')->info('payApprovedSave: post not found');
			return;
		}

		$currentTariff = $post->getCurrTariff();
		$currentEndDate = Carbon::now();
		$plan = strtolower($plan);
		$startDate = Carbon::now();
		
		if($currentTariff)
		{
			Log::channel('payed')->info('payApprovedSave: current tariff', [$currentTariff]);
			// $currentTariff->active = false;
			// $currentTariff->status = 'complete';
			

			$currentTariffEndDate = Carbon::parse($currentTariff->end);

			if(
				$currentTariffEndDate > $currentEndDate
				&& $currentTariff->name == $plan
			)
			{
				$diffInMinutes = $currentTariffEndDate->diffInMinutes($currentEndDate);
				if($diffInMinutes > 0)
					$currentEndDate->addMinutes($diffInMinutes);
			}
			// $currentTariff->end = $startDate;
		}
	   
		$currentEndDate->addDays(7);
		
		$price = 0;
		
        if ($plan == 'silver') {
            $price = Post::COST_SILVER;
        }
        if ($plan == 'gold') {
            $price = Post::COST_GOLD;
        }
        if ($plan == 'diamond') {
            $price = Post::COST_DIAMOND;
        }
		
		$user = Auth::user();
		
		$tariff = Tariff::where([
			'order_number' => $orderNumber,
			'pay_id' => $payId,
			'post_id' => $postId,
			'name' => $plan,
			'status' => 'wait'
		])->first();

		if(!$tariff)
			$tariff = new Tariff;
			
		$tariff->currency = 'EUR';
        $tariff->price = $price;

        if(is_object($user) && isset($user->id))
            $tariff->user_id = $user->id;
            
		$tariff->post_id = $postId;
		$tariff->name = $plan;
		$tariff->order_number = $orderNumber;
		$tariff->pay_id = $payId;
		$tariff->start = $startDate;
		$tariff->end = $currentEndDate;
		$tariff->active = true;
		$tariff->modificar = 0;
		$tariff->eliminar = 0;
		$tariff->status = 'complete';
		$tariff->pasion_category = $post->category;
		
		if($currentTariff)
		{
			foreach($currentTariff->toArray() as $code => $value)
			{
				if($code == 'old_post_delete_status')
					continue;
					
				if(strstr($code, '_status'))
				{
					if($value == 'no')
						$value = 'active';

					$tariff->{$code} = $value;
				}
			}

            if(isset($currentTariff->pasion_category))
                $tariff->pasion_category = $currentTariff->pasion_category;

			$currentTariff->delete();
		}
		else
		{
			$tariff->to_verify_at = Carbon::now();
			$tariff->status = 'create';
		}

		$tariff->save();
		
		$oldTariffs = Tariff::where('id', '!=', $tariff->id)
			->where('post_id', $tariff->post_id)->get();
            
		if($oldTariffs)
			foreach($oldTariffs as $t)
				$t->delete();

		$transaction = new TransactionModel([
			'currency' => 'EUR',
			'price' => $price,
			'user_id' => $tariff->user_id,
			'post_id' => $postId,
			'pay_id' => $payId,
			'name' => $plan,
			'order_number' => $orderNumber,
			'start' => $startDate,
			'end' => $currentEndDate
		]);
		$transaction->save();
		
		$post->publish = true;
		$post->end_pay = $currentEndDate;
		if($post->modificar < 0)
			$post->modificar = 1;
		else
			$post->modificar++;

		if($post->eliminar < 0)
			$post->eliminar = 1;
		else
			$post->eliminar++;
			
        $post->save();
        
        Log::channel('payed')->info('payApprovedSave: finish');
	}
	
    public function payCoorCard(Request $request) {
        $posts = json_decode($request->post('posts'), true);
        $price = 0;

        foreach ($posts as $post) {
            $price += Post::getCost($post['tariff']);
        }
        
        $client = Client::create([
            'consumerKey' => env('CARDINITY_KEY', ''),
            'consumerSecret' => env('CARDINITY_SECRET', '')
        ]);
        
        $fields = [
            'amount' => floatval($price),
            'currency' => 'EUR',
            'settle' => false,
            'description' => $request['plan'],
            'order_id' => $request['postid'],
            'country' => 'ES',
            'payment_method' => Create::CARD,
            'payment_instrument' => [
                'pan' => isset($request['cardNumberNotMask']) ? str_replace(' ', '', $request['cardNumberNotMask']) : '', //'4111111111111111',
                'exp_year' => isset($request['cardYear']) ? (int)$request['cardYear'] : 0, //2016,
                'exp_month' => isset($request['cardMonth']) ? (int)$request['cardMonth'] : 0, //12,
                'cvc' => isset($request['cardCvv']) ? $request['cardCvv'] : '', //456,
                'holder' => isset($request['cardName']) ? $request['cardName'] : '', //'Mike Dough'
            ],
        ];

        $method = new Create($fields);
		
        try {
            $payment = $client->call($method);
			if($payment->getStatus() == 'approved' || $payment->getStatus() == 'pending')
			{
				$user = Auth::user();

				$request->session()->put('key', $payment->getId());
				
				foreach ($posts as $post) {
					$tariff = new Tariff;
					$tariff->currency = 'EUR';
					$tariff->price = Post::getCost($post['tariff']);
					$tariff->user_id = $user->id;
					$tariff->post_id = $post['id'];
					// $tariff->start = Carbon::now();
					// $tariff->end = Carbon::now()->addMonths(1);
					$tariff->name = $post['tariff'];
					$tariff->order_number = $payment->getId();
					$tariff->active = false;
					$tariff->status = 'wait';
					$tariff->save();
				}
			
                $tariffs = Tariff::where('order_number', $payment->getId())->where('status', 'wait')->where('user_id', $user->id)->get();

                foreach ($tariffs as $tariff) {
                    $tariff->start = Carbon::now();
                    $tariff->end = Carbon::now()->addDays(7);
                    $tariff->active = true;
                    $tariff->modificar = 0;
                    $tariff->eliminar = 0;
                    $tariff->status = 'complete';
                    $tariff->save();

                    $post = Post::whereId($tariff->post_id)->whereUserId($user->id)->first();
                    $post->publish = true;
                    $post->modificar = 0;
                    $post->eliminar = 0;
                    $post->end_pay = Carbon::now()->addDays(7);
                    $post->save();
                }
			}
			
            return ['type' => 'success'];
        } catch (Declined $exception) {
			$payment = $exception->getResult();
			$errors = $payment->getErrors();
			return ['type' => 'error', 'message' => $errors[0]['message']];
        }
		catch (ValidationFailed $exception) {
	
            $payment = $exception->getResult();
			$errors = $payment->getErrors();
			return ['type' => 'error', 'message' => $errors[0]['message']];
        }
        catch( InvalidAttributeValue $exception)
		{
			return ['type' => 'error', 'message' => 'Error desconocido'];
		}
    }
	
	private function generateOrderNumber()
	{
		$number = (string)date("YmdHis");
		for($i = 0; $i < 3; $i++)
			$number .= (string)rand(100, 999);
		return $number;
	}	
	
	private function toError($data)
	{

	}

	private function toInfo($data)
	{

	}

	private function log($data)
	{
		$fields = [

		];
	
		$log = new PayLog($fields);
		$log->save();
	}


	private function toLog($v)
	{
		if(!is_string($v))
			$v = json_encode($v);
		
		file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/../log.txt', $v . "\n", FILE_APPEND);
	}
	
	/*
	public function __construct() {
        $this->api_context = new ApiContext(
            new OAuthTokenCredential(config('paypal.client_id'), config('paypal.secret'))
        );
        $this->api_context->setConfig(config('paypal.settings'));
    }
	*/
	
	/*
    public function pay(Request $request) {
        $request->validate(['plan' => 'required']);
        $plan = $request['plan'];
        $price = 0;
        if ($plan == 'silver') {
            $price = 29.99;
        }
        if ($plan == 'gold') {
            $price = 99.95;
        }
        if ($plan == 'diamond') {
            $price = 299.95;
        }

        $pay_amount = $price;
        // We create the payer and set payment method, could be any of "credit_card", "bank", "paypal", "pay_upon_invoice", "carrier", "alternate_payment".
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        // Create and setup items being paid for.. Could multiple items like: 'item1, item2 etc'.
        $item = new Item();
        $item->setName('Paypal Payment')->setCurrency('EUR')->setQuantity(1)->setPrice($pay_amount);
        // Create item list and set array of items for the item list.
        $itemList = new ItemList();
        $itemList->setItems([$item]);
        // Create and setup the total amount.
        $amount = new Amount();
        $amount->setCurrency('EUR')->setTotal($pay_amount);
        // Create a transaction and amount and description.
        $transaction = new Transaction();
        $transaction->setAmount($amount)->setItemList($itemList)
            ->setDescription('Almeja Rosa Payment Plan.');
        //You can set custom data with '->setCustom($data)' or put it in a session.
        // Create a redirect urls, cancel url brings us back to current page, return url takes us to confirm payment.
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(route('confirm-payment'))
            ->setCancelUrl(route('error-payment'));
        // We set up the payment with the payer, urls and transactions.
        // Note: you can have different itemLists, then different transactions for it.
        $payment = new Payment();
        $payment->setIntent('Sale')->setPayer($payer)->setRedirectUrls($redirect_urls)
            ->setTransactions([$transaction]);
        // Put the payment creation in try and catch in case of exceptions.
        try{
            $payment->create($this->api_context);
        }catch (PayPalConnectionException $ex){
            return redirect(route('error-payment'));
        }catch (Exception $ex){
            return redirect(route('error-payment'));
        }
        // We get 'approval_url' a paypal url to go to for payments.
        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // You can set a custom data in a session

        $user = Auth::user();

        $key = Str::random(32);
        $request->session()->put('key', $key);

        $tariff = new Tariff;
        $tariff->currency = 'EUR';
        $tariff->price = $price;
        $tariff->user_id = $user->id;
        $tariff->post_id = $request['postid'];
        // $tariff->start = Carbon::now();
        // $tariff->end = Carbon::now()->addMonths(1);
        $tariff->name = $plan;
        $tariff->order_number = $key;
        $tariff->active = false;
        $tariff->status = 'wait';
        $tariff->save();

        $post = Post::where('id', $request['postid'])->where('is_delete', 0)->first();
        $post->modificar = 0;
        $post->eliminar = 0;
        $post->save();

        // We redirect to paypal tp make payment
        if (isset($redirect_url)) {
            return redirect($redirect_url);
        }

        // If we don't have redirect url, we have unknown error.
        return redirect(route('error-payment'));
    }
	*/
	
	/*
    public function success(Request $request) {

        if (empty($request->query('paymentId')) || empty($request->query('PayerID')) || empty($request->query('token'))) {
            return redirect(route('error-payment'));
        }

        // We retrieve the payment from the paymentId.
        $payment = Payment::get($request->query('paymentId'), $this->api_context);

        // We create a payment execution with the PayerId
        $execution = new PaymentExecution();
        $execution->setPayerId($request->query('PayerID'));

        // Then we execute the payment.
        $result = $payment->execute($execution, $this->api_context);

        // Get value store in array and verified data integrity
        $value = $request->session()->pull('key', 'default');

        // Check if payment is approved
        if ($result->getState() != 'approved') {
            return redirect(route('error-payment'));
        }

        $user = Auth::user();
        $tariffs = Tariff::where('order_number', $value)->where('status', 'wait')->where('user_id', $user->id)->get();

        foreach ($tariffs as $tariff) {
            $tariff->start = Carbon::now();
            $tariff->end = Carbon::now()->addDays(7);
            $tariff->active = true;
			$tariff->modificar = 0;
			$tariff->eliminar = 0;
            $tariff->status = 'complete';
            $tariff->save();

            $post = Post::whereId($tariff->post_id)->whereUserId($user->id)->first();
            $post->publish = true;
            $post->modificar = 0;
            $post->eliminar = 0;
            $post->end_pay = Carbon::now()->addDays(7);
            $post->save();
        }

        if ($tariffs->count() == 0) {
            return redirect(route('error-payment'));
        }

        // return redirect('/checkout')->withSuccess('Payment made successfully');

        return view('pages.paysuccess');
    }
	*/
	
	/*
	public function payCoor(Request $request) {
        $posts = json_decode($request->post('posts'), true);
        $cost = 0;

        foreach ($posts as $post) {
            $cost += Post::getCost($post['tariff']);
        }

        $pay_amount = $cost;
        // We create the payer and set payment method, could be any of "credit_card", "bank", "paypal", "pay_upon_invoice", "carrier", "alternate_payment".
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        // Create and setup items being paid for.. Could multiple items like: 'item1, item2 etc'.
        $item = new Item();
        $item->setName('Paypal Payment')->setCurrency('EUR')->setQuantity(1)->setPrice($pay_amount);
        // Create item list and set array of items for the item list.
        $itemList = new ItemList();
        $itemList->setItems([$item]);
        // Create and setup the total amount.
        $amount = new Amount();
        $amount->setCurrency('EUR')->setTotal($pay_amount);
        // Create a transaction and amount and description.
        $transaction = new Transaction();
        $transaction->setAmount($amount)->setItemList($itemList)
            ->setDescription('Almeja Rosa Payment Plan.');
        //You can set custom data with '->setCustom($data)' or put it in a session.
        // Create a redirect urls, cancel url brings us back to current page, return url takes us to confirm payment.
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(route('confirm-payment'))
            ->setCancelUrl(route('error-payment'));
        // We set up the payment with the payer, urls and transactions.
        // Note: you can have different itemLists, then different transactions for it.
        $payment = new Payment();
        $payment->setIntent('Sale')->setPayer($payer)->setRedirectUrls($redirect_urls)
            ->setTransactions([$transaction]);
        // Put the payment creation in try and catch in case of exceptions.

        try{
            $payment->create($this->api_context);
        }catch (PayPalConnectionException $ex){
            return redirect(route('error-payment'));
        }catch (Exception $ex){
            return redirect(route('error-payment'));
        }
        // We get 'approval_url' a paypal url to go to for payments.
        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // You can set a custom data in a session
        $user = Auth::user();

        $key = Str::random(32);
        $request->session()->put('key', $key);

        foreach ($posts as $post) {
            $tariff = new Tariff;
            $tariff->currency = 'EUR';
            $tariff->price = Post::getCost($post['tariff']);
            $tariff->user_id = $user->id;
            $tariff->post_id = $post['id'];
            //            $tariff->start = Carbon::now();
            //            $tariff->end = Carbon::now()->addMonths(1);
            $tariff->name = strtolower($post['tariff']);
            $tariff->order_number = $key;
            $tariff->active = false;
            $tariff->status = 'wait';
            $tariff->save();
        }

        // We redirect to paypal tp make payment
        if (isset($redirect_url)) {
            return redirect($redirect_url);
        }

        // If we don't have redirect url, we have unknown error.
        return redirect(route('error-payment'));
    }
	*/
}
