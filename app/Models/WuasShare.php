<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WuasShare extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function post()
    {
        return $this->belongsTo(WuasPost::class,'wuas_post_id');
    }

    public function sharedPosts()
    {
        //Probably can be shorter, look at the laravel docs.
        return $this->belongsToMany('App\Models\WuasPost', 'wuas_shares', 'wuas_post_id', 'user_id');
    }

    public function getAllPostsAttribute()
    {
        $posts = $this->post()->selectRaw('"user_post" AS type')->get();
        $sharedPosts = $this->sharedPosts()->selectRaw('"shared_post" AS type')->get();

        return $posts->merge($sharedPosts)->sortBy('created_at');
    }
}
