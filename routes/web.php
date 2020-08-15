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
Route::get('/', 'HomeContreller@index' ) ;

Route::get('/about', 'HomeContreller@about' );

Route::get('/contact', 'HomeContreller@contact' ) ;

Route::get('/user', 'UserController@contact' ) ;

Route::get('/user/create', 'UserController@contact' ) ;

Route::get('/user/{name}', 'UserController@contact' ) ;

Route::get('/user/{name}/{age}', 'UserController@contact' ) ;
