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

Route::get('/', [
    'uses'=>'HomeController@getWelcome',
    'as'=>'/'
]);
Route::get('/dashboard',[
   'uses'=>'HomeController@getDash',
   'as'=>'dashboard'
]);

Route::get('/login',[
   'uses'=>'AdminController@getLogin',
   'as'=>'login'
]);
Route::post('/login',[
   'uses'=>'AdminController@postLogin',
   'as'=>'login'
]);
Route::get('/about',[
   'uses'=>'PostController@getAbout',
   'as'=>'about'
]);