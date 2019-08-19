<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use TCG\Voyager\Facades\Voyager;

class ProductController extends Controller
{
    public function index()
    {

        $categories = ProductCategory::all();
        foreach ($categories as $category) {

            $category->count = $category->count();
        }


        $products = Product::with('category')->get();

        foreach ($products as $product) {


            $product->thumbnail = Voyager::image($product->image);

            $product->image = Voyager::image($product->getThumbnail($product->image, 'cropped'));
            $product->link = url(route('product', ['id' => $product->slug]));


        }





        return view('products.index', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product=Product::where('slug',$id)->firstOrFail();

        return view('products.show',compact('product'));
    }


}
