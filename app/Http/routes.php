<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('index', function () {
    return view('layout.masterpage');
});

//ลองเเฉยๆ
Route::get('long/test', function () {
    return view('test');
});

Route::get('product', function () {
    return view('product');
});

Route::get('flashdrive','ProductController@getproduct');

Route::get('cart', function () {
    return view('cart');
});

Route::get('register', function () {
    return view('registerpage');
});

Route::post('registerform', 'ProductController@getregister');

Route::get('myauction', function () {
    return view('myauction');
});

Route::get('admin', function () {
	$countries = DB::table('catagory')->get();
    return view('admin',compact('countries',$countries));
});

Route::post('add', 'ProductController@Addnewproduct');

Route::get('login', function () {
    return view('login');
});