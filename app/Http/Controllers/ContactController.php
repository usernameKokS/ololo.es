<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use GuzzleHttp\Client;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([

            'name' => ['required', 'min:2', 'max:100'],
            'phone' => ['required', 'min:2', 'max:100'],
            'body' => ['required', 'min:2', 'max:900'],
            'email' => ['required', 'email'],
            'affair' => ['required', 'min:2', 'max:100'],
        ]);

        if (config('recaptcha.enabled') && !$this->checkRecaptcha($request->recaptcha_token, $request->ip())) {
            return response()->json([
                'error' => 'Captcha is invalid.',
            ], Response::HTTP_BAD_REQUEST);
        }

        $user = Auth::user();

        $billing = new Contact;
        $billing->user_id = $user->id;
        $billing->phone = $request['phone'];
        $billing->affair = $request['affair'];
        $billing->name = $request['name'];
        $billing->body = $request['body'];
        $billing->email = $request['email'];
        $billing->save();


        $data = [
            'phone' => $billing['phone'],
            'affair' => $billing['affair'],
            'name' => $billing['name'],
            'body' => $billing['body'],
            'email' => $billing['email'],
        ];

        $sendto = 'almejarosa.es@gmail.com';
        $from = env('MAIL_FROM_ADDRESS');
            if($sendto){
                try{
                    \Mail::send('mails.contact', $data, function($message) use ($sendto, $from)
                    {
                        $message->from($from, 'Contactar.');
                        $message->to($sendto, $sendto)->subject('Contactar.');
                    });
                } catch (\Throwable $e) {
                    report($e);
                }
            }


        return Response::json(array('success' => 'En breve nos pondremos en contacto contigo!'));
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
