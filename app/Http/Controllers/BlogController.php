<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function index()
    {

        $posts = Post::with('category')->OrderBy('id', 'desc')->get();
        return view('blog.index',compact('posts'));

    }

    public function show($id)
    {
      $post=  Post::where('slug',$id)->firstOrFail();

        return view('blog.show',compact('post'));
    }
}
