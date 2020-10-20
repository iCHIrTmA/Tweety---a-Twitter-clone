<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function(){
	Route::get('/tweets', 'TweetController@index')->name('home');
	Route::post('/tweets', 'TweetController@store');
});

Route::get('/profiles/{user}', 'ProfileController@show')->name('profile');
