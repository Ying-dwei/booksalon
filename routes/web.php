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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function(){
	return '這是首頁';
});

Route::group(['prefix'=>'tea'],function(){

	Route::get('/','TeaController@index');
	Route::get('/teatea','TeaController@teatea');
});



Route::group(['prefix'=>'booksalon'],function(){
	Route::get('/','BooksalonController@index');
	Route::get('/login','BooksalonController@login');
	Route::get('/addArc','BooksalonController@addArc');
});


