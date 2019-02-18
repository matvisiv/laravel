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

Route::get('/', function () {
    return view('index');
*/
Route::get('/', ['uses' => 'HomeController@index','as' => 'home']);  

Route::get('/{id}/edit', 'HomeController@edit')->where('id', '[0-9]+');
Route::post('/edit', 'HomeController@update');

Route::post('/form', 'HomeController@add');
Route::get('/{id}/del', 'HomeController@delete');



