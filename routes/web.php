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
    'index','store','home', 'create']);

Route::group(['prefix'=>'/district'] , function(){




    Route::get('/{title}/', 'DistrictController@index');

    Route::get('/{title}/reg',function($title){
        return $title.'registration user in cocnret district';
    });




});

Route::get ('/request-form','PostController@show');








    Route::resource('/moders/complains', 'Moders\ComplainsController')->middleware('x');












Route::resource('/admin','AdminController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('/type_complain','TypeOfComplainsController');

