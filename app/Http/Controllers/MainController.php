<?php

namespace App\Http\Controllers;

use App\Helpers\OpenCreate;
use App\Post;
use App\Tariff;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Cardinity\Exception;
use Cardinity\Client;
use Cardinity\Method\Payment;

class MainController extends Controller
{
    public function test()
    {
        // dd($_SERVER);
        /*$tariff = Tariff::where('id', 203)->first();

        $nowDate = \Carbon\Carbon::now();
        $currentTariffStartDate = Carbon::parse($tariff->start);
        $currentTariffEndDate = Carbon::parse($tariff->end);

        $diffInMinutes = $currentTariffStartDate->diffInMinutes($nowDate);

        if($diffInMinutes > 0)
            $currentTariffEndDate->addMinutes($diffInMinutes);
 
        $tariff->start = $nowDate;
        $tariff->end = $currentTariffEndDate;
        $tariff->save();*/
		/*$currentTariff = Tariff::where('id', 156)->first();
		$tariff = new Tariff;
		foreach($currentTariff->toArray() as $code => $value)
		{
			if(strstr($code, '_status'))
				$tariff->{$code} = $value;
		}*/
		// dd($tariff);
    }

    public function policy()
    {
        return view('pages.pagepolicy');
    }

    public function posttariff($id = 0)
    {
        // WTF???
        // dd(auth()->user()->entity);
        $coor = false; // auth()->user()->entity;
        $postid = $coor ? 0 : $id;

        return view('pages.tariff', compact('postid', 'coor'));
    }

    public function error()
    {
        return view('pages.payerror');
    }


    public function index()
    {
        $user = Auth::user();

        $posts = Post::where('status', 'create')
        ->where('is_delete', 0)
        ->where('user_id', $user->id)
        ->get();

        $show_video = 'true';
        if(count($posts) > 0){
            $show_video = 'false';
        }

        $open_create = OpenCreate::checkCreate();

        return view('pages.index', compact('user', 'show_video', 'open_create'));
    }

    public function uploadphoto(Request $request)
    {
        // dd(23);
        return $request;
    }

    public function consumption()
    {
        $user = Auth::user();

        $tarifs = Tariff::where('user_id', $user->id)
            ->with('post')
            ->where('status', '!=', 'wait')
            ->where('name', '!=', '')->latest()->get();

        return view('pages.consumption', compact('tarifs'));
    }

    public function archive(){

        return view('archive.index');
    }

    public function videoFaq()
    {
        return view('pages.videofaq');
    }
}

