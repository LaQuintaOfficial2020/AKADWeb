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
Route::post('auth/login', 'Auth\LoginController@authenticate');
Route::get('auth/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', function () {
    return view('loginAkad');
});

// Route::post('auth/login', function(){
//     return view('welcome');
// }); 

Route::get('/AvatarCreation', function () {
    return view('AvatarCreation');
});
