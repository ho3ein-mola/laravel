<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $this->validate($request, [
            'post_body' => 'required | max:100'
        ]);
        $post = new Post;
        $post->body = $request->post_body;
        $message = 'ther was an error';
        if ($request->User()->posts()->save($post)) {
            $message = 'post created successfull';
        }
        return redirect()->route('show')->with(['messeage' => $message]);
    }

    public function show()
    {
        $post = new Post();
        $all_post = $post->orderBy('id','DESC')->get();
        return view('dashboard',compact('all_post'));
    }
}
