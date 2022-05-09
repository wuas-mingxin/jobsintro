<?php

namespace App\Http\Controllers;

use Avihs\PostReply\Models\Post;
use Illuminate\Http\Request;
use App\Models\WuasPost;
class WuasPostController extends Controller
{
    function index()
    {
        $posts = WuasPost::with(['user','comments'])->where('status',1)->get();

        return response()->json($posts);
    }
}
