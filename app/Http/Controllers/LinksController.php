<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

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

    public function product($id)
    {
        $product=Product::where('slug',$id)->firstOrFail();

        return view('product',compact('product'));
    }

    public function products()
    {

        $categories=ProductCategory::all();
        foreach ($categories as $category){

            $category->count=$category->count();
        }


        $products=Product::with('category')->get();
        foreach ($products as $product){


            $product->thumbnail= Voyager::image($product->image);

         $product->image=Voyager::image($product->getThumbnail($product->image,'cropped'));
         $product->link=url(route('product',['id'=>$product->slug]));


        }



        return view('products',compact('products','categories'));
    }
}
