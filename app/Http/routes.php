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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', function () {
    if(\Illuminate\Support\Facades\Auth::user()->hasRole('admin')){
        return view('welcome');
    }
    else{
        echo 'Please login as admin';
    }
});

//register users
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//authenticate users
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

//user logout
Route::get('auth/logout', 'Auth\AuthController@getLogout');
