<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
       $data =  $request->validate([
       
            'name'=> 'required',
            'email'=> 'required',
            'subject'=> 'required',
            'message'=> 'required',
            'blog_id' =>'required'
        ]);
      
            Comment::create($data);
            return back()->with('status_store_Comments', 'Your Comment ADD With Sucess');
    }
}
