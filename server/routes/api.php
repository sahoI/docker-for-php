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

Route::post('/book','BookmarkController@create');
Route::get('/book','BookmarkController@show');
Route::get('/book/{id}','BookmarkController@getBookmark');
Route::post('/book/{id}','BookmarkController@edit');
Route::delete('/book/{id','BookmarkController@delete');
