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

/*Route::get('/', function () {
    return view('home');
});*/
Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/Shop', function () {
    return view('pages.Shop');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/Team', function () {
    return view('pages.Team');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/checkouts', function () {
    return view('pages.checkouts');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/product-details', function () {
    return view('pages.product-details');
});

Route::post('/register_action', 'RegisterController@store');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
