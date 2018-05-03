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

Route::get('/', 'HomeController@show');

Route::resource('/posts','PostController')->only([

    'index','store', 'create']);
//Route::get ('/request-form','PostController@show');











    Route::resource('/moders/complains', 'Moders\ComplainsController')->only([
        'index','edit','update','show'
    ]);











Route::resource('/admin','AdminController')->only([
    'index']);

