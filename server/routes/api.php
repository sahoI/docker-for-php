<?php

use App\Http\Controllers\BookmarkController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/event','EventsController@create');
Route::get('/event','EventsController@show');
Route::get('/event/{id}','EventsController@getBookmark');
Route::post('/event/{id}','EventsController@edit');
Route::delete('/event/{id}','EventsController@delete');
