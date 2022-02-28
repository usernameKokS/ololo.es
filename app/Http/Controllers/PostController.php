<?php

namespace App\Http\Controllers;

use App\Avatar;
use App\Category;
use App\Post;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use Session;
use Twilio\Rest\Client;
use Illuminate\Validation\ValidationException;
use App\Rate;
use App\Service;
use App\Remain;
use App\Helpers\OpenCreate;
use App\Place;
use Carbon\Carbon;
use App\Tariff;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $open_create = OpenCreate::checkCreate();
		$payMessage = false;
		
        return view('post.index', compact('open_create', 'payMessage'));
    }
	
	public function indexWithSuccess()
    {
        // $open_create = OpenCreate::checkCreate();
		
		$payMessage = [
			'type' => 'success',
			'message' => '¡PAGO REALIZADO CON ÉXITO!'
		];
		
        return view('post.result', compact('payMessage'));
    }
	
	public function indexWithFailure()
    {
        // $open_create = OpenCreate::checkCreate();
		
		$payMessage = [
			'type' => 'error',
			'message' => '¡Pago cancelado!'
		];
		
        return view('post.result', compact('payMessage'));
    }

    public function active($id)
    {

        $user = Auth::user();

        $post = Post::where('user_id', $user->id)->where('id', $id)->where('is_delete', 0)->first();

        if($post->publish == true){
            $post->publish = false;
            $post->tariffActive();
            $message = 'Пост деактерирован';
        } else {
            $post->publish = true;
            $post->tariffActive(true);
            $message = 'Пост актевирован';
        }
        $post->save();

        return Response::json(array('success' => $message));
    }

    public function autopay($id)
    {
        $user = Auth::user();

        $post = Post::whereUserId($user->id)->whereId($id)->where('is_delete', 0)->first();
        $post->autopay = !$post->autopay;
        $post->save();

        return Response::json(array('success' => 'success'));
    }


    public function delete($id){
        
        $user = Auth::user();

        $post = Post::where('user_id', $user->id)->where('is_delete', 0)->where('id', $id)->first();
        $post->archive = true;
        $post->publish = false;
        // $post->eliminar = 1;
        // dd($post->tariffSetOneDelete());
        
        // TODO
        $open_create = OpenCreate::checkCreate();

        if(!$post->tariffSetOneDelete())
            return Response::json(array('success' => 'Error', 'opencreate' => $open_create));

        $post->save();

        $open_create = OpenCreate::checkCreate();

        return Response::json(array('success' => 'Anuncio esta desactivado y guardado en "ELIMINADOS"', 'opencreate' => $open_create));
    }

    public function restore($id){

        $open_create = OpenCreate::checkCreate();

        if($open_create == false){
            throw ValidationException::withMessages(['error1' => 'Error, many posts.']);
        }

        $user = Auth::user();

        $post = Post::where('user_id', $user->id)->where('is_delete', 0)->where('id', $id)->first();
        $t = Tariff::wherePostId($id)->latest()->first();
        $end = $t ? $t->end : null;

        $post->restoreTariff();
        $post->publish = Carbon::parse($end)->isAfter(now());
        $post->archive = false;
        $post->save();

        return Response::json(array('success' => 'Anuncio se restauró con éxito. Ahora lo puedes ver en la sección "listado anuncios"', 'opencreate' => $open_create));
    }

    public function getposts(Request $request)
    {
        $user = Auth::user();

        $posts = Post::where('user_id', $user->id)->where('is_delete', 0)
        ->where('status', '!=', 'creating');

        if($request['archive'] == 'true'){
            $posts->where('archive', true);
        } else{
            $posts->where('archive', false);
        }

        $posts->orderByDesc('publish');

        if($request['sort'] == 'updated_at'){
            $posts->orderBy('updated_at', 'desc');
        } else {
            $posts->orderBy('name');
        }

        $posts = $posts->get();
        $archived_count = Post::whereUserId($user->id)->where('is_delete', 0)->where('status', '!=', 'creating')->whereArchive(1)->count();

        foreach($posts as $post){
            $avatar = Avatar::where('user_id', $user->id)
            ->where('post_id', $post->id)
            ->where('active', 1)
            ->latest()
            ->first();

            $post->avatar = $avatar ? $avatar['url'] : null;

            $post->tarifa = 'No';
            $tarif = Tariff::where('status', '!=', 'wait')
            ->where('post_id', $post->id)
            ->where('user_id', $user->id)->latest()->first();

            if($tarif){
                $post->end_pay = $tarif->end;
                if(Carbon::parse($tarif->end)->timestamp > Carbon::now()->timestamp){
                    $post->tarifa = $tarif['name'];

                }
            }

            $post->colorpay = 'green';

            if(Carbon::parse($post->end_pay)->isBefore(Carbon::now())){
                $post->last_end_pay = $post->end_pay ?? 'No';
                $post->colorpay = 'red';
                $post->end_pay = null;
            } else {

                if(Carbon::parse($post->end_pay)->lt(Carbon::now()->addDays(3))){
                    $post->colorpay = 'yellow';
                } else {
                    $post->colorpay = 'green';
                }
                if(Carbon::parse($post->end_pay)->lt(Carbon::now()->addDays(1))){
                    $post->colorpay = 'red';
                }



                $post->end_pay = Carbon::parse($post->end_pay)->format('d.m.Y H:i:s');

            }

            $post->countModify = $post->getCountAvailableForModify();
            $post->countDelete = $post->getCountAvailableForDelete();
        }

        return response()->json(['data' => $posts, 'archive_count' => $archived_count]);
    }

    public function getpost(Request $request){
        $post_id = $request->post('id');
        $user_id = auth()->user()->id;

        $post = Post::whereUserId($user_id)->where('is_delete', 0)->whereId($post_id)->firstOrFail();

        $tarif = Tariff::where('status', '!=', 'wait')
            ->where('post_id', $post->id)
            ->where('user_id', $user_id)->latest()->first();

        if($tarif){
            $post->end_pay = $tarif->end;
            if(Carbon::parse($tarif->end)->timestamp > Carbon::now()->timestamp){
                $post->tariff = $tarif['name'];
            }
        }else{
            $post->tariff = 'No';
        }

        $post->colorpay = 'red';

        if(Carbon::parse($post->end_pay)->timestamp < Carbon::now()->timestamp){
            $post->last_end_pay = $post->end_pay;
            $post->colorpay = 'red';
            $post->end_pay = null;
        } else if($post->end_pay != null) {
            if(Carbon::parse($post->end_pay)->lt(Carbon::now()->addDays(3))){
                $post->colorpay = 'yellow';
            } else {
                $post->colorpay = 'green';
            }
            if(Carbon::parse($post->end_pay)->lt(Carbon::now()->addDays(1))){
                $post->colorpay = 'red';
            }



            $post->end_pay = Carbon::parse($post->end_pay)->format('d.m.Y H:i:s');

        }



        return response()->json($post);
    }

    public function phonecreate(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'phone' => ['required'],
        ]);
		
		$time = time();
		$validateTime = Session::get('phoneNumberTimer');

		if($validateTime && ($validateTime + 180) >= $time)
		{
			throw ValidationException::withMessages(['error1' => 'Espere 3 minutos antes de volver a pedir otro mensaje de confirmación de teléfono.']);
		}
		else
			Session::put('phoneNumberTimer', $time);
		
        if ($request['phone']) {
            $phoneNum = $request['phone'];
            $phoneNum = str_replace('-', '', $phoneNum);

            Session::put('phoneNum', $phoneNum);
            
            $token = $this->sendToken($phoneNum);
            Session::put('code', $token);
            return Response::json(array('success' => 'Por favor revise su teléfono'));
        } else {
            throw ValidationException::withMessages(['error1' => 'Error, intente nuevamente más tarde.']);
        }
    }

    public function validateToken($token)
    {
        $validToken = Session::get('token');
        if ($token == $validToken) {
            return true;
        } else {
            return false;
        }
    }

    public function checkphone(Request $request)
    {
        $request->validate([
            'code' => ['required', 'min:6', 'max:6'],
        ]);

        $token = $request['code'];
        $phoneNum = Session::get('phoneNum');


        if ($this->validateToken($token)) {

            $user =  Auth::user();
            // $user->phone = $phoneNum;
            // $user->save();

            $post = Post::where('id', $request['post_id'])
            ->where('is_delete', 0)
            ->where('user_id', $user->id)
            ->latest()->first();
            // dd($post);
            $post->phone = $phoneNum;
            $post->save();

            return Response::json(array('success' => 'Teléfono agregado con éxito'));
        } else {
            throw ValidationException::withMessages(['error1' => 'El error El código no es correcto.']);
        }
    }

    public function sendToken($phone_number)
    {
        $token = mt_rand(100000, 999999);
        Session::put('token', $token);

        /*
		$client = new Client(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));

        $sms = $client->account->messages->create(
            '+34' . $phone_number,
            [
                'body' => "Code Almeja Rosa: " . $token,
                "from" => env('TWILIO_NUMBER')
            ]
        );
		*/
		// Account details
		$apiKey = urlencode('A9pdTNutjjw-h6B8PDfaQQS35OpoI2UVzOfRnJ3hkW');
		$phone_number = str_replace('-', '', $phone_number);
		// Message details
		$numbers = array('+34' . $phone_number);
		$sender = urlencode('AlmejaRosa');
		$message = rawurlencode('El codigó:' . rand(100000, 900000));
	 
		$numbers = implode(',', $numbers);
	 
		// Prepare data for POST request
		$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => rawurlencode("Code Almeja Rosa: " . $token));

		// Send the POST request with cURL
		$ch = curl_init('https://api.txtlocal.com/send/');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		file_put_contents($_SERVER['DOCUMENT_ROOT']. '/sms.txt', $response. ' - '. $phone_number . ' - ' . $token . "\n", FILE_APPEND);
		// Process your response here
		// echo $response;
		
		return $token;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(isset($_GET['code']))
            dd(Session::get('code'));
        $open_create = OpenCreate::checkCreate();

        if($open_create == false){
            abort(404);
        }

        $user = Auth::user();
        // $mapkey = env('GOOGLE_MAP');

        $post = Post::where('user_id', $user->id)
        ->where('is_delete', 0)
        ->where('status', 'creating')
        ->latest()
        ->first();

        if(!$post){
            $post = new Post();
            $post->user_id = $user->id;
            $post->status = 'creating';
            $post->worktime = 'Mañana (10:00 - 22:00)';
            $post->save();
        }

        $places = Place::where('string', '!=', null)->where('province', '!=', null)->where('town', '!=', null)->get();

        $cats = Category::orderBy('sort', 'asc')->distinct('title')->pluck('title');
        
        $rates = Rate::where('post_id', $post->id)->get();

        $services = Service::where('post_id', $post->id)->with('childs')->get();

        $remains = Remain::where('post_id', $post->id)->with('childs')->get();

        if(!$rates) $rates = [];
        if(!$services) $services = [];
        if(!$remains) $remains = [];

        return view('post.create', compact('user', 'cats', 'post', 'places', 'rates', 'services', 'remains'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $open_create = OpenCreate::checkCreate();
        if($request['edit'] != 'true'){
            if($open_create == false){
                return 'Error';
            }
        }

        $request->validate([
            'province' => ['required'],
            'town' => ['required'],
            //'place' => ['required'],
            'post_id' => ['required'],
            'worktime' => ['required'],
            'category' => ['required'],
            'title' => ['required'],
            // 'text' => ['required'],
            'name' => ['required'],
            'age' => ['required'],
        ]);

        $user = Auth::user();

        $post = Post::where('user_id', $user->id)
        ->where('is_delete', 0)
        ->where('id', $request['post_id'])
        ->latest()
        ->first();
		
        // $post = Post::where('id', $request['post_id'])
        // ->latest()
        // ->first();
        $avatar = Avatar::where('post_id', $request['post_id'])->count();
		if(!$avatar || $avatar < 3)
		{
			return response()->json([
				'message' => 'Como mínimo tienes que subir 3 fotos.',
				'type' => 'error'
			]);
		}
		
		if(
			empty(trim($request['text_1']))
			|| empty(trim($request['text_2']))
			|| empty(trim($request['text_3']))
			|| empty(trim($request['text_4']))
			|| empty(trim($request['text_5']))
			|| empty(trim($request['text_6']))
			|| empty(trim($request['text_7']))
			|| empty(trim($request['text_8']))
			|| empty(trim($request['text_9']))
			|| empty(trim($request['text_10']))
		)
		{
			return response()->json([
				'message' => 'Descripción tiene que ser mínimo de 300 y máximo de 1000 dígitos en las 10 líneas.',
				'type' => 'error'
			]);
		}
		
        if(
            $request['edit'] == 'true' 
            && $post->status == 'create'
        )
        {
            if(!$post->tariffSetOneEdit())
                return 'Error';

            // $post->modificar = 1;
        }

        $post->town = $request['town'];
        $post->province = $request['province'];
        // $post->place = $request['place'];
        $post->place = $request['province'] . ', ' . $request['town'];
        $post->zona = $request['zona'];

        $post->map = $request['currentPlace'];

        $post->status = 'create';
        $post->category = $request['category'];
        $post->title = $request['title'];
        $post->text = join('###', [
			$request['text_1'],
			$request['text_2'],
			$request['text_3'],
			$request['text_4'],
			$request['text_5'],
			$request['text_6'],
			$request['text_7'],
			$request['text_8'],
			$request['text_9'],
			$request['text_10']
		]);
        $post->name = $request['name'];
        $post->age = $request['age'];
        $post->whatsapp = $request['whatsapp'];
        $post->worktime = $request['worktime'];
        $post->save();

        $old_rates = Rate::where('user_id', $user->id)
            ->where('post_id', $post->id)
            ->get();

        foreach ($old_rates as $old_rate) {
            Rate::where('id', $old_rate['id'])->delete();
        }

        $old_services = Service::where('post_id', $post->id)
            ->get();

        foreach ($old_services as $old_service) {
            Service::where('id', $old_service['id'])->delete();
        }

        $old_remains = Remain::where('user_id', $user->id)
            ->where('post_id', $post->id)
            ->get();

        foreach ($old_remains as $old_remain) {
            Remain::where('id', $old_remain['id'])->delete();
        }


        if (count($request['rates']) > 0) {
            foreach ($request['rates'] as $rate) {
                $new_rate = new Rate;
                $new_rate->user_id = $user->id;
                $new_rate->post_id = $post->id;
                $new_rate->title = $rate['title'];
                $new_rate->price = $rate['price'];
                $new_rate->save();
            }
        }

        if (isset($request['services']) && count($request['services']) > 0) {
            foreach ($request['services'] as $rate) {

                if ($rate['active'] == true) {
                    if(($rate['name'] == 'activas') or ($rate['name'] == 'pasivas')){
                        if($post->category == 'Travesti'){
                            $new_rate = new Service;
                            $new_rate->user_id = $user->id;
                            $new_rate->post_id = $post->id;
                            $new_rate->name = $rate['name'];
                            $new_rate->save();
                        }
                    } else {
                        $new_rate = new Service;
                        $new_rate->user_id = $user->id;
                        $new_rate->post_id = $post->id;
                        $new_rate->name = $rate['name'];
                        $new_rate->save();
                    }

                }

                // if (count($rate['options']) > 0) {

                    foreach ($rate['options'] as $minoption) {
                        if ($minoption['active'] == true) {
                            $new_serv = new Service;
                            $new_serv->user_id = $user->id;
                            $new_serv->post_id = $post->id;
                            $new_serv->parent = $new_rate->id;
                            $new_serv->name = $minoption['name'];
                            $new_serv->save();
                        }
                    }
                // }
            }
        }

        if (isset($request['sobres']) && count($request['sobres']) > 0) {
            foreach ($request['sobres'] as $rate) {
                if ($rate['active'] == true) {
                    $new_rate = new Remain;
                    $new_rate->user_id = $user->id;
                    $new_rate->post_id = $post->id;
                    $new_rate->name = $rate['name'];
                    $new_rate->save();
                }

                if (count($rate['options']) > 0) {

                    foreach ($rate['options'] as $minoption) {
                        if ($minoption['active'] == true) {
                            $new_serv = new Remain;
                            $new_serv->user_id = $user->id;
                            $new_serv->post_id = $post->id;
                            $new_serv->parent = $new_rate->id;
                            $new_serv->name = $minoption['name'];
                            $new_serv->save();
                        }
                    }
                }
            }
        }

        return 'Success';
    }

    public function storeStep1(Request $request)
    {
        $open_create = OpenCreate::checkCreate();
        if($request['edit'] != 'true'){
            if($open_create == false){
                return 'Error';
            }
        }

        $request->validate([
            'province' => ['required'],
            'town' => ['required'],
            //'place' => ['required'],
            'post_id' => ['required'],
            // 'worktime' => ['required'],
            // 'category' => ['required'],
            // 'title' => ['required'],
            // 'text' => ['required'],
            'name' => ['required'],
            'age' => ['required'],
        ]);

        $user = Auth::user();

        $post = Post::where('user_id', $user->id)
            ->where('is_delete', 0)
            ->where('id', $request['post_id'])
            ->latest()
            ->first();

        $post->town = $request['town'];
        $post->province = $request['province'];
        // $post->place = $request['place'];
        $post->place = $request['province'] . ', ' . $request['town'];
        $post->zona = $request['zona'];
        // $post->map = $request['currentPlace'];
        $post->name = $request['name'];
        $post->age = $request['age'];

        if(!$post->step || $post->step < 1)
            $post->step = 1;

        $post->save();

        return response()->json(['type' => 'success']);
    }

    public function storeStep2(Request $request)
    {
        $request->validate([
            // 'province' => ['required'],
            // 'town' => ['required'],
            //'place' => ['required'],
            'post_id' => ['required'],
            'worktime' => ['required'],
            // 'category' => ['required'],
            // 'title' => ['required'],
            // 'text' => ['required'],
            // 'name' => ['required'],
            // 'age' => ['required'],
        ]);

        $user = Auth::user();

        $post = Post::where('user_id', $user->id)
            ->where('is_delete', 0)
            ->where('id', $request['post_id'])
            ->latest()
            ->first();

        $post->worktime = $request['worktime'];
        
        if($post->step < 2)
            $post->step = 2;

        $post->save();

        $old_rates = Rate::where('user_id', $user->id)
            ->where('post_id', $post->id)
            ->get();

        foreach ($old_rates as $old_rate) {
            Rate::where('id', $old_rate['id'])->delete();
        }

        $old_services = Service::where('post_id', $post->id)
            ->get();

        foreach ($old_services as $old_service) {
            Service::where('id', $old_service['id'])->delete();
        }

        $old_remains = Remain::where('user_id', $user->id)
            ->where('post_id', $post->id)
            ->get();

        foreach ($old_remains as $old_remain) {
            Remain::where('id', $old_remain['id'])->delete();
        }


        if (count($request['rates']) > 0) {
            foreach ($request['rates'] as $rate) {
                $new_rate = new Rate;
                $new_rate->user_id = $user->id;
                $new_rate->post_id = $post->id;
                $new_rate->title = $rate['title'];
                $new_rate->price = $rate['price'];
                $new_rate->save();
            }
        }

        if (isset($request['services']) && count($request['services']) > 0) {
            foreach ($request['services'] as $rate) {

                if ($rate['active'] == true) {
                    if(($rate['name'] == 'activas') or ($rate['name'] == 'pasivas')){
                        if($post->category == 'Travesti'){
                            $new_rate = new Service;
                            $new_rate->user_id = $user->id;
                            $new_rate->post_id = $post->id;
                            $new_rate->name = $rate['name'];
                            $new_rate->save();
                        }
                    } else {
                        $new_rate = new Service;
                        $new_rate->user_id = $user->id;
                        $new_rate->post_id = $post->id;
                        $new_rate->name = $rate['name'];
                        $new_rate->save();
                    }

                }

                // if (count($rate['options']) > 0) {

                    foreach ($rate['options'] as $minoption) {
                        if ($minoption['active'] == true) {
                            $new_serv = new Service;
                            $new_serv->user_id = $user->id;
                            $new_serv->post_id = $post->id;
                            $new_serv->parent = $new_rate->id;
                            $new_serv->name = $minoption['name'];
                            $new_serv->save();
                        }
                    }
                // }
            }
        }

        if (isset($request['sobres']) && count($request['sobres']) > 0) {
            foreach ($request['sobres'] as $rate) {
                if ($rate['active'] == true) {
                    $new_rate = new Remain;
                    $new_rate->user_id = $user->id;
                    $new_rate->post_id = $post->id;
                    $new_rate->name = $rate['name'];
                    $new_rate->save();
                }

                if (count($rate['options']) > 0) {

                    foreach ($rate['options'] as $minoption) {
                        if ($minoption['active'] == true) {
                            $new_serv = new Remain;
                            $new_serv->user_id = $user->id;
                            $new_serv->post_id = $post->id;
                            $new_serv->parent = $new_rate->id;
                            $new_serv->name = $minoption['name'];
                            $new_serv->save();
                        }
                    }
                }
            }
        }

        return response()->json(['type' => 'success']);
    }

    public function storeStep3(Request $request)
    {
        $request->validate([
            // 'province' => ['required'],
            // 'town' => ['required'],
            //'place' => ['required'],
            'post_id' => ['required'],
            // 'worktime' => ['required'],
            'category' => ['required'],
            'title' => ['required'],
            // 'text' => ['required'],
            // 'name' => ['required'],
            // 'age' => ['required'],
        ]);

        $user = Auth::user();

        $post = Post::where('user_id', $user->id)
            ->where('is_delete', 0)
            ->where('id', $request['post_id'])
            ->latest()
            ->first();

        if(
            empty(trim($request['text_1']))
            || empty(trim($request['text_2']))
            || empty(trim($request['text_3']))
            || empty(trim($request['text_4']))
            || empty(trim($request['text_5']))
            || empty(trim($request['text_6']))
            || empty(trim($request['text_7']))
            || empty(trim($request['text_8']))
            || empty(trim($request['text_9']))
            || empty(trim($request['text_10']))
        )
        {
            return response()->json([
                'message' => 'Descripción tiene que ser mínimo de 300 y máximo de 1000 dígitos en las 10 líneas.',
                'type' => 'error'
            ]);
        }

        $post->category = $request['category'];
        $post->title = $request['title'];
        $post->sex = $request['sex'];
        $post->text = join('###', [
			$request['text_1'],
			$request['text_2'],
			$request['text_3'],
			$request['text_4'],
			$request['text_5'],
			$request['text_6'],
			$request['text_7'],
			$request['text_8'],
			$request['text_9'],
			$request['text_10']
		]);
        
        if($post->step < 3)
            $post->step = 3;

        $post->save();

        return response()->json(['type' => 'success']);
    }

    public function storeStep4(Request $request)
    {
        $request->validate([
            //'province' => ['required'],
            //'town' => ['required'],
            //'place' => ['required'],
            'post_id' => ['required'],
            //'worktime' => ['required'],
            //'category' => ['required'],
            //'title' => ['required'],
            // 'text' => ['required'],
            //'name' => ['required'],
            //'age' => ['required'],
        ]);

        $user = Auth::user();

        $post = Post::where('user_id', $user->id)
            ->where('is_delete', 0)
            ->where('id', $request['post_id'])
            ->latest()
            ->first();

        $avatar = Avatar::where('post_id', $request['post_id'])->count();

        if(!$avatar || $avatar < 3)
        {
            return response()->json([
                'message' => 'Como mínimo tienes que subir 3 fotos.',
                'type' => 'error'
            ]);
        }

        $postStatus = $post->status;

        if(
            $request['edit'] == 'true' 
            && $post->status == 'create'
        )
        {
            if(!$post->tariffSetOneEdit())
                return 'Error';

            // $post->modificar = 1;
        }

        $post->status = 'create';

        if($post->step < 4)
            $post->step = 4;

        $post->save();
        
        return response()->json(['type' => 'success', 'status' => $postStatus, 'post_id' => $request['post_id']]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(isset($_GET['code']))
            dd(Session::get('code'));

        $cats = Category::orderBy('sort', 'asc')->distinct('title')->pluck('title');
        $user = Auth::user();

        // $post = Post::where('user_id', $user->id)->where('id', $id)->latest()->first();

        $post = Post::where('id', $id)->where('is_delete', 0)->latest()->first();
        
        if(!$post){
            abort(404);
        }

        $rates = Rate::where('post_id', $post->id)->get();

        $services = Service::where('post_id', $post->id)->with('childs')->get();

        $remains = Remain::where('post_id', $post->id)->with('childs')->get();
        $places = Place::where('string', '!=', null)->where('province', '!=', null)->where('town', '!=', null)->get();

        $countModify = $post->getCountAvailableForModify();
		
		$isCanEdit = false;
		
		$post->tarifa = 'No';
		$tarif = Tariff::where('status', '!=', 'wait')
		->where('post_id', $post->id)
		->where('user_id', $user->id)->latest()->first();

		if($tarif){
			$post->end_pay = $tarif->end;
			if(Carbon::parse($tarif->end)->timestamp > Carbon::now()->timestamp){
				$post->tarifa = $tarif['name'];
			}
		}
		
		if(
			$post->publish == false
			|| $post->tarifa == 'No'
			|| !$post->end_pay
		)
			$isCanEdit = true;
		
        if($countModify <= 0 && !$isCanEdit)
        {
            return redirect('/posts');
        }

        $countDelete = $post->getCountAvailableForDelete();

        return view('post.edit', compact('user', 'cats', 'post', 'rates', 'services', 'remains', 'places', 'countModify', 'countDelete', 'isCanEdit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();

        $avatars = Avatar::where('user_id', $user->id)
        ->where('post_id', $id)
        ->get();

        /*foreach($avatars as $avatar){
            Storage::delete('/public/' . $avatar->url);
            $avatar->delete();
        }

        $videos = Video::where('user_id', $user->id)
        ->where('post_id', $id)
        ->get();

        foreach($videos as $video){
            Storage::delete('/public/' . $video->url);
            $video->delete();
        }*/

        $post = Post::where('user_id', $user->id)->where('id', $id)->first();
        $post->is_delete = true;
        $post->save();

        return Response::json(array('success' => 'Tu anuncio ha sido eliminado con éxito.'));
    }
}
