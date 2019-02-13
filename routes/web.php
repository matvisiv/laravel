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
Route::get('message/{id}/edit', ['uses' => 'HomeController@edit','as' => 'message.edit']);


Route::get('/form',function(){
	$ddd = new messages;
	$ddd->name = "igor";
	$ddd->email = "ka4r6@a3ui.g";
	$ddd->save();
	return view('messages.index');
});



