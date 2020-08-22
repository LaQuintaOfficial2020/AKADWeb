<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::post('api/login', '');
Route::middleware('auth:api')->get('/user', 'ApiController@checker')->name('user'); 

Route::post('/login', 'ApiController@login');

Route::group(['middleware' =>'auth:api'], function(){
    Route::get('/activities','Api\ProfileController@getActivities')->name('activities');
});

Route::get('/unAuthenticated',function(){
    return response()->json(['error'=> 'no active user'],401);
})->name('unAuthenticated');

// Route::group(['middleware' => 'cors'], function() {
//     Route::post('login', 'ApiController@login');
// });
