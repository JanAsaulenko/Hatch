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
<<<<<<< HEAD
'index','store', 'create']);
=======
    'index','store', 'create']);




>>>>>>> 222053e8b84d571b9c9ec0ea7149a83918c5fabd





Route::get ('/request-form','PostController@show');







    Route::resource('/moders/complains', 'Moders\ComplainsController')->middleware('x');


Route::resource('/admin','AdminController')->only([
    'index']);














