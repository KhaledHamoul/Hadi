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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('user', 'UserController');
Route::resource('orders', 'OrdersController');
Route::resource('hadi', 'HadiController');
Route::resource('haditype', 'HadiTypeController');
Route::resource('stage', 'StageController');
Route::resource('mk', 'MKController');
