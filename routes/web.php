<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$auth = (env('APP_SSL', false)) ?'web' : "auth";

Route::get('/', 'LinksController@comming')->name('comming');
Route::get('/home', 'LinksController@index')->name('home');
Route::get('/contact','LinksController@contact')->name('contact');
Route::get('/about','LinksController@about')->name('about');
Route::post('/contact','LinksController@contact_post')->name('contact.post');
Route::get('/services','LinksController@services')->name('services');

Route::prefix('products')->group(function () {
    Route::get('/{category}','ProductController@index')->name('products');
    Route::get('/{category}/{id}','ProductController@show')->name('product');
});

Route::prefix('blog')->group(function () {
    Route::get('/','BlogController@index')->name('blog.index');
    Route::get('/{id}','BlogController@show')->name('blog.show');
});



Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/{id}','PagesController@show');



