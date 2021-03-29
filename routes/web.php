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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello','HelloController@show');
Route::get('vision','HelloController@vision');
Route::get('syukudai1','HelloController@syukudai1');
Route::get('career','HelloController@career');
Route::get('contact','HelloController@contact');
Route::post('store','HelloController@store');
Route::get('tensuu1','HelloController@tensuu1');
Route::post('input',"HelloController@result");
Route::get('tensuu2',"HelloController@tensuu2");
Route::post('input2',"HelloController@result2");
Route::get('tensuu3','HelloController@tensuu3');
Route::post('input3','HelloController@result3');
Route::get('table','HelloController@table');
Route::get('itemscontact','HelloController@itemscontact');
Route::post('items2','HelloController@items2');
Route::get('itemsTable','HelloController@itemsTable');
