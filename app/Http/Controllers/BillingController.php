<?php

namespace App\Http\Controllers;

use App\Billing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use GuzzleHttp\Client;
class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('billing.index');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'social' => ['required', 'min:2', 'max:100'],
            'cif' => ['required', 'min:2', 'max:100'],
            'name' => ['required', 'min:2', 'max:100'],
            'surname' => ['required', 'min:2', 'max:100'],
            'postal' => ['required', 'min:2', 'max:100'],
            'country' => ['required', 'min:2', 'max:100'],
            'email' => ['required', 'email'],
            'date_start' => ['required'],
            'date_end' => ['required'],
        ]);

        if (config('recaptcha.enabled') && !$this->checkRecaptcha($request->recaptcha_token, $request->ip())) {
            return response()->json([
                'error' => 'Captcha is invalid.',
            ], Response::HTTP_BAD_REQUEST);
        }

        $user = Auth::user();

        $billing = new Billing;
        $billing->user_id = $user['id'];
        $billing->social = $request['social'];
        $billing->cif = $request['cif'];
        $billing->name = $request['name'];
        $billing->surname = $request['surname'];
        $billing->postal = $request['postal'];
        $billing->country = $request['country'];
        $billing->email = $request['email'];
        $billing->date_start = Carbon::parse($billing['date_start']);
        $billing->date_end = Carbon::parse($billing['date_end']);
        $billing->save();

        $data = [
            'social' => $billing['social'],
            'cif' => $billing['cif'],
            'name' => $billing['name'],
            'surname' => $billing['surname'],
            'postal' => $billing['postal'],
            'country' => $billing['country'],
            'email' => $billing['email'],
            'date_start' => Carbon::parse($billing['date_start']),
            'date_end' => Carbon::parse($billing['date_end'])
        ];

        $sendto = 'info.almejarosa@gmail.com';
        $from = env('MAIL_FROM_ADDRESS');

            if($sendto){
                try{
                    \Mail::send('mails.billing', $data, function($message) use ($sendto, $from)
                    {
                        $message->from($from, 'Nueva factura.');
                        $message->to($sendto, $sendto)->subject('Nueva factura.');
                    });
                } catch (\Throwable $e) {
                    report($e);
                }
            }


        return Response::json(array('success' => 'En breve recibirás el email con la factura solicitada. Por si acaso revisa tu carpeta de spam. Si no lo recibes pasados unos 24 horas, <a href="/contact" style="color: #fe6885">contacta con nosotros.</a>'));


    }


    protected function checkRecaptcha($token, $ip)
    {
        $response = (new Client)->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret'   => config('recaptcha.secret'),
                'response' => $token,
                'remoteip' => $ip,
            ],
        ]);
        $response = json_decode((string)$response->getBody(), true);
        return $response['success'];
    }
}
