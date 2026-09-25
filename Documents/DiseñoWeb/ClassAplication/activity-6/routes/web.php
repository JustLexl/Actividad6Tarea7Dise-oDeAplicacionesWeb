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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', 'App\Http\Controllers\HelloWorld@sayHello');

Route::get('/product', 'App\Http\Controllers\ProductController@index');
Route::get('/createproduct', 'App\Http\Controllers\ProductController@create');
Route::get('/editproduct', 'App\Http\Controllers\ProductController@edit');