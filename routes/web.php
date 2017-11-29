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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','PostController@welcome' );
//Route::resource('/posts','PostController' );
Route::get('/posts/{id}','PostController@show' );
Route::get('/posts','PostController@index' );
Route::post('/posts','PostController@store' );
Route::post('/user/login','UserController@login');
Route::get('/user/login','UserController@login');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/mensagem','MensagemController@store' );
Route::post('/mensagem','MensagemController@store' );
Route::get('/mensagens','MensagemController@index' );

Auth::routes();


