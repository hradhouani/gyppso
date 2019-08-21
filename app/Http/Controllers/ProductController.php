<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use TCG\Voyager\Facades\Voyager;

class ProductController extends Controller
{
    public function index($id)
    {

        $cat=ProductCategory::where('slug',$id)->firstOrFail();

        $categories = ProductCategory::all();

        foreach ($categories as $category) {
            $category->count = $category->count();
        }


        $products = Product::with('category')->where('category_id',$cat->id)->get();

        foreach ($products as $product) {
            $product->thumbnail = Voyager::image($product->image);
            $product->image = Voyager::image($product->getThumbnail($product->image, 'cropped'));
            $product->link = url(route('product', ['category'=>$id,'id' => $product->slug]));


        }





        return view('products.index', compact('products', 'categories','cat'));
    }

    public function show($category,$id)
    {
        $category=ProductCategory::where('slug',$category)->firstOrFail();
        $product=Product::where('slug',$id)->where('category_id',$category->id)->firstOrFail();

        return view('products.show',compact('product','category'));
    }


}
