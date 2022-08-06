<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WuasPost;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class WuasPostController extends Controller
{
    function index()
    {
        $posts =  WuasPost::with('sharedFrom')->select(array('id','post_text','post_file_name','post_file_thumb','user_id','created_at','post_file','shared_from'))
        ->with(['user','comments'])->where('status',1)->orderBy('id','DESC')->paginate(5);
        return response()->json($posts);
    }

    function like(WuasPost $post)
    {
        auth()->user()->toggleLike($post);
        return response()->json($posts);
    }
}
