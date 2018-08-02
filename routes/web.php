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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('welcome');

    //
});

Route::get('/{locale}/contact', function ($locale) {
    App::setLocale($locale);
    return view('contact');

    //
});

Route::get('{locale}/register', function ($locale) {
    App::setLocale($locale);
    return view('auth/register');

    //
});

Route::get('{locale}/login', function ($locale) {
    App::setLocale($locale);
    return view('auth/login');

    //
});

Route::get('{locale}/track', function ($locale) {
    App::setLocale($locale);
    return view('track');

    //
});





Route::resource('user', 'UserController');
Route::resource('orders', 'OrdersController');
Route::resource('hadi', 'HadiController');
Route::resource('haditype', 'HadiTypeController');
Route::resource('stage', 'StageController');
Route::resource('mk', 'MKController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
