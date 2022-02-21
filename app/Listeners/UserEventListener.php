<?php

namespace App\Listeners;

use Illuminate\Http\Request;

class UserEventListener
{
    public function handle($event)
    {
        /*
        $currentIpAddress = $_SERVER['HTTP_CF_CONNECTING_IP'] ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'];
        
        if(
            isset($event->user->ip_address)
            && $event->user->ip_address != $currentIpAddress
        )
        {
            $user = \App\User::where('id', $event->user->id)->first();
            $user->ip_address = $currentIpAddress;
            $user->save();

            $user->setEditForAllActiveTariffs();
        }
        */
    }
}
