<?php

namespace App\Helpers;

use App\Post;
use Illuminate\Support\Facades\Auth;

class OpenCreate
{
    public static function checkCreate(){
		$user = Auth::user();

        $posts = Post::where('user_id', $user->id)
        ->where('status', 'create')
        ->where('is_delete', 0)
		->where('archive', '!=', true)
        ->get();
        $open_create = true;
        if($user->entity == false){
            if(count($posts) > 0) {
                $open_create = false;
            }
        }

        return $open_create;
	}
}