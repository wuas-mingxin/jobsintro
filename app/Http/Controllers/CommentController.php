<?php

namespace App\Http\Controllers;

use App\Models\WuasPost;
use App\Models\User;
use Illuminate\Http\Request;
use Avihs\PostReply\Models\Message;
use Avihs\PostReply\Models\Comment;

class CommentController extends Controller
{
    function getCommentOfThisPost(WuasPost $post){
//        $comment = $post->addComment("My Second Comment", User::find(3));
        $comments = $post->comments;
        return response()->json($comments);
    }

    function addComment(Request $request){
        $post = WuasPost::find($request->post_id);
        $comment = $post->addComment($request->comment, auth()->user());
        return response()->json($post->comments);
    }

    function getAllComments()
    {
        return Comment::all();
    }

}
