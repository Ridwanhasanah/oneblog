<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post){

    	Comment::create([
    		'post_id' => $post->id, //mengisi post id
    		'user_id' => auth()->id(),
    		'message' => $request->message //mengisi pesan komentar
    	]);

    	return redirect()->back();
    }
}
