<?php

use Illuminate\Support\Facades\Route;

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

// Register Routes
Route::group(["middleware" => "guest"], function() {
Route::get('register', 'loginRegister\RegisterController@register')->name('register');
Route::post('register', 'loginRegister\RegisterController@storeUser')->name('register');

// Login Routes
Route::get('login', 'loginRegister\LoginController@login')->name('login');
Route::post('login', 'loginRegister\LoginController@authenticate');
});

Route::get('logout', 'loginRegister\LoginController@logout')->name('logout');

//Homepage
Route::get('/', 'loginRegister\RegisterController@register');

// Dashboard
Route::group(["middleware" => "auth"], function() {
    Route::get('home', 'HomeController@home')->name('home');
});
