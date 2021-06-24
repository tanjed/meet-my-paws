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

//login registration//
Route::post('/register-action','RegisterController@createAuth');
Route::post('/login-action','LoginController@authLogin');
Route::get('/logout','LoginController@logout');
Route::get('/login','LoginController@loginView');
Route::get('/register','RegisterController@registerView');
//page routes
Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('/profile','HomeController@profile');
