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
    return view('index');
});


Route::get('/signup' , function(){
    return view('signup');
});

Route::get('/signin', function(){
    return view('signin');
});

Route::get('/404', function(){
    return view('404');

});

// Route::get('')