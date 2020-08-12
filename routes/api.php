<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//All posts
Route::get('posts','PostsController@index');

//Single post
Route::get('posts/{id}','PostsController@show');

//Create new post
Route::post('posts','PostsController@store');

//Update post
Route::put('posts/{id}','PostsController@update');

//Delete
Route::delete('posts/{id}','PostsController@destroy');


