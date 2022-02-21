<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class EmailController extends Controller
{

    public function sendpolicy(Request $request) {
        $request->validate([
            'policy' => ['required'],
        ]);

        if ($request['policy'] == true) {
            $user = Auth::user();
            $user->policy = true;
            $user->save();

            return redirect('/');
        }

        return redirect('/');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function policy() {
        $user = Auth::user();

        return view('pages.policy', compact('user'));
    }

    public function forgot(Request $request) {
        $validatedData = $request->validate([
            'email' => ['required', 'email'],
        ]);

        $user = User::where('email', $request['email'])->latest()->first();

        if (!$user) {

            throw ValidationException::withMessages(['error1' => 'Error, user not found!']);

        }

        $user->token = sha1(time());
        $user->save();

        // session(['token' => $user->token]);
        // session(['email' => $request['email']]);

        $sitename = env('APP_URL');

        $token_url = $sitename.'/user/verify/'.$user->token;

        $icon = $sitename.'/img/key.png';

        $data = [
            'token' => $token_url,
            'icon' => $icon,
        ];

        try{
            $from = env('MAIL_FROM_ADDRESS');
            $send = $request['email'];
            Mail::send('mails.auth', $data, function ($message) use ($from, $send) {
                $message->from($from, 'Reset email.');
                $message->to($send, $send)->subject('Reset email on Almeja Rosa');
            });
        }catch (\Throwable $e){
            report($e);

            return false;
        }

        return 'SUCCESS';


    }


    public function verifyUser(Request $request, $token) {

        // $value = $request->session()->get('token');
        // $email = $request->session()->get('email');

        /*if ($token != $value) {
            abort(404);
        }

        if (!$email) {
            abort(404);
        }*/

		$user = User::where('token', $token)->first();

		if(!$user)
			abort(404);
		
		$email = $user->email;
		
        return view('pages.register', compact('email'));
    }

    public function register(Request $request) {

        $validatedData = $request->validate([
            'password' => ['required', 'min:6', 'max:16'],
        ]);

        $email = $request['email'];

        if (!$email) {
            abort(404);
        }

        $user = User::where('email', $email)->latest()->first();

        if (!$user) {
            $user = new User;
        }

        $user->email = $email;
        $user->token = sha1(time());
        $user->email_verified_at = time();
        $user->password = bcrypt($request['password']);
        $user->real_password = $request['password'];
        $user->ip_address = $request->server('HTTP_CF_CONNECTING_IP') ? $request->server('HTTP_CF_CONNECTING_IP') : $request->server('REMOTE_ADDR');
        $user->user_agent = $request->server('HTTP_USER_AGENT');
        $user->visitor_id = $request['visitorId'];
        $user->screen_resolution = join('x', $request['screenResolution']);
        $user->fonts = implode(',', $request['fonts']);
        $user->languages = $this->joiner(',', $request['languages']);
        $user->platform = $request['platform'];
        $user->timezone = $request['timezone'];

        $user->save();

        // session(['token' => null]);

        Auth::login($user);
        
        $sitename = env('APP_URL');
        $icon = $sitename.'/img/key.png';

        $data = [
            'login' => $email,
            'password' => $request['password'],
            'icon' => $icon
        ];
        try{
            $from = env('MAIL_FROM_ADDRESS');
            $send = $request['email'];
            Mail::send('mails.register', $data, function ($message) use ($from, $send) {
                $message->from($from, 'Almejarosa.es');
                $message->to($send, $send)->subject('Tus datos de acceso a almejarosa.es');
            });
        }catch (\Throwable $e){
            report($e);

            return false;
        }
        return "OK";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validatedData = $request->validate([
            'email' => ['required', 'email', 'unique:users'],
        ]);

        $user = User::where('email', $request['email'])->latest()->first();

        if(!$user){
            $user = new User;
			$user->email = $request['email'];
            $user->entity = 1;
        }
		
		$token = sha1(time());
        $user->token = $token;
        $user->save();
        // session(['email' => $request['email']]);
        // session(['token' => $token]);

        $sitename = env('APP_URL');

        $token_url = $sitename.'/user/verify/'.$token;
        $icon = $sitename.'/img/key.png';
        $data = [
            'token' => $token_url,
            'icon' => $icon,
        ];
		return response()->json($data);
        /*try{
            $from = env('MAIL_FROM_ADDRESS');
            $send = $request['email'];
            Mail::send('mails.auth', $data, function ($message) use ($from, $send) {
                $message->from($from, 'Almejarosa.es');
                $message->to($send, $send)->subject('Escoger contraseña en almejarosa.es');
            });
        }catch (\Throwable $e){
            report($e);

            return false;
        }

        return 'SUCCESS';*/
    }

    public function masanuncios() {
        $data = [
            'name' => request()->post('name'),
            'tel' => request()->post('tel'),
            'time' => request()->post('time'),
        ];

        Mail::send('mails.masanuncios', $data, function ($message) {
            $message->from('info.almejarosa@gmail.com', 'Almejarosa.es');
            $message->to('info.almejarosa@gmail.com',
                'info.almejarosa@gmail.com')->subject('Запрос на несколько рекламных объявлений');
        });

        return response()->json('');
    }

    private function joiner($glue, array $array)
    {
        $ret = '';

        foreach($array as $piece)
        {
            if(is_array($piece))
                $ret .= $glue . $this->joiner($glue, $piece);
            else
                $ret .= $glue . $piece;
        }

        $ret = str_replace($glue.$glue, '', $ret);
        
        if($ret[0] == $glue)
            $ret = substr($ret, 1, strlen($ret));

        return $ret;
    }

}
