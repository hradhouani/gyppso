<?php

namespace App\Http\Controllers;

class LinksController extends Controller
{
    public function index()
    {
        return view('welcome');
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

    public function product()
    {
        return view('product');
    }
}
