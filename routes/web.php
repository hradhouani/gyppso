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

Route::get('/', 'LinksController@index')->name('home');
Route::get('/contact','LinksController@contact')->name('contact');
Route::get('/about','LinksController@about')->name('about');
Route::get('/services','LinksController@services')->name('services');
Route::get('/product','LinksController@product')->name('product');

Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/{id}','PagesController@show');



