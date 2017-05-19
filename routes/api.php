<?php

// use Illuminate\Http\Request;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::get('getUser', 'UserController@index');
Route::get('getBook', 'BookController@index');
Route::get('getArc/{id}', 'ArticleController@index');



Route::post('create/user', 'UserController@store');
Route::delete('users/{id}', 'UserController@destroy');



Route::post('create/book', 'BookController@store');


