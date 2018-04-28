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

<<<<<<< HEAD



Route::resource('complains','ComplainsController')->only([
'index','show']
=======
<<<<<<< HEAD




    Route::resource('moders', 'Moders\ComplainsController')->only([
        'index','edit','update','show'
    ]);


Auth::routes();




Route::resource('/view_all','ViewAllController')->only([
    'index']);


=======
Route::resource('moders','ModeratorFormController')->only([
        'index','show','edit']
>>>>>>> deeab038cf52f1f77f6c9053ae316ae1fec7b674
);



Route::resource('/admin','AdminController')->only([
    'index']);
<<<<<<< HEAD

=======
>>>>>>> 07982e1c858cde033f53b866152f2115a42d002c
>>>>>>> deeab038cf52f1f77f6c9053ae316ae1fec7b674
