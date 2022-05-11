<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WuasPost;
use App\Models\User;
class WuasPostController extends Controller
{
    function index()
    {
        $posts = WuasPost::select(array('id','post_text','post_file_name','post_file_thumb','user_id'))
            ->with(['user','comments'])->where('status',1)->get();
        return response()->json($posts);
    }
    
    function like(WuasPost $post)
    {
        auth()->user()->toggleLike($post);
        return response()->json($posts);
    }
}
