<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;
use App\Ad;
use App\Post;

class User extends Authenticatable
{
    use Notifiable;

    const TODOS = ['Todos', '', 'null'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'policy', 'entity'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany(Post::class)->wherePublish(1)->whereArchive(0)->where('is_delete', 0);
    }

    public function getAllAds4Statistic($site, $postId){
		
        $ads = collect([]);
        $postData = Post::where('id', $postId)->first();

        if(!$postData)
            return;

        foreach ($postData->ads as $ad) {
            
            $unixtime = $ad->unixtime_check;
            
            if($unixtime <= 0)
                $unixtime = $ad->unixtime_posting;

            if($ad->status != 'active' && $unixtime < mktime(0, 0, 0, date("m"), date("d")-1, date("Y")))
                continue;
            
            $site_todos = in_array($site, self::TODOS);
            $postid_todos = in_array($postId, self::TODOS);

            if ($site_todos && $postid_todos){	
                $ads->push($ad);
            }

            if (!$site_todos && $postid_todos){
                if ($ad->site == $site){
                    
                    $ads->push($ad);
                }
            }

            if ($site_todos && !$postid_todos){
                if($ad->post_id == $postId){
                                            
                    $ads->push($ad);
                }
            }

            if (!$site_todos && !$postid_todos){
                if($ad->site == $site && $ad->post_id == $postId){
                    $ads->push($ad);
                }
            }
        }
        
        return $ads;
    }

    public function getAllAds($site, $postid){

        $ads = collect([]);

        foreach ($this->posts as $post){
            foreach ($post->adsAll as $ad) {
				
				$unixtime = $ad->unixtime_check;
				
				if($unixtime <= 0)
					$unixtime = $ad->unixtime_posting;

				if($ad->status != 'active' && $unixtime < mktime(0, 0, 0, date("m"), date("d")-1, date("Y")))
					continue;
				
				/*if($ad->status != 'active' && $ad->updated_at < Carbon::yesterday())
					continue;*/
				
                $site_todos = in_array($site, self::TODOS);
                $postid_todos = in_array($postid, self::TODOS);

                if ($site_todos && $postid_todos){	
                    $ads->push($ad);
                }

                if (!$site_todos && $postid_todos){
                    if ($ad->site == $site){
						
                        $ads->push($ad);
                    }
                }

                if ($site_todos && !$postid_todos){
                    if($ad->post_id == $postid){
												
                        $ads->push($ad);
                    }
                }

                if (!$site_todos && !$postid_todos){
                    if($ad->site == $site && $ad->post_id == $postid){
                        $ads->push($ad);
                    }
                }
                // var_dump([$ad->site, $ad->post_id]);
            }
        }
        
        return $ads;
    }

    public function getPostsId(){
        return Post::whereUserId($this->id)->wherePublish(1)->whereArchive(0)->where('is_delete', 0)->get('id')->pluck('id');
    }

    public function getAllForums($site, $postid)
    {
        $forums = collect([]);


        foreach ($this->posts as $post){
            $currentTariff = $post->getCurrTariff();

            if(!$currentTariff)
                continue;
                
            $tariff_start = $currentTariff->start;

            foreach ($post->forums as $forum) {
                
                if ($forum->created_at->isBefore($tariff_start)) break;

                $site_todos = in_array($site, self::TODOS);
                $postid_todos = in_array($postid, self::TODOS);

                if ($site_todos && $postid_todos){
                    $forums->push($forum);
                }

                if (!$site_todos && $postid_todos){
                    if ($forum->site == $site){
                        $forums->push($forum);
                    }
                }

                if ($site_todos && !$postid_todos){
                    if($forum->post_id == $postid){
                        $forums->push($forum);
                    }
                }

                if (!$site_todos && !$postid_todos){
                    if($forum->site == $site && $forum->post_id == $postid){
                        $forums->push($forum);
                    }
                }

            }
        }

        return $forums;
    }

    public function setEditForAllActiveTariffs()
    {
        $posts = $this->posts()->get();
        
        if(sizeof($posts) > 0)
            foreach($posts as $post)
            {
                $tariff = $post->getCurrTariff();

                if($tariff)
                {
                    $tariff->edit = 1;
                    $tariff->save();
                }
            }
    }
}
