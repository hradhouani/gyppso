<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class LinksController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->limit(3)->OrderBy('id', 'desc')->get();


        return view('welcome',compact('posts'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }


    public function contact_post(Request $request)
    {

        $data=$request->except(['_token','submit']);
      $contact= Contact::create($data);
      return redirect()->back();
    }


}
