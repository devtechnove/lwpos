<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes(['verify' => true]);

Route::post('user/password/reset','ResetPasswordController@index');
Route::post('user/reset/password','ResetPasswordController@reset');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')
         ->name('home')
         ->middleware('verified')
         ->middleware('actived');
});

