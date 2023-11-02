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
//ControllerのIndexメソッド呼び出し
Route::get('rental','RentalController@index');
Route::post('rental','RentalController@post');

// 追加
Route::get('rental/add','RentalController@add');
Route::post('rental/add','RentalController@create');
// 削除
Route::get('rental/del','RentalController@delete');
Route::post('rental/del','RentalController@remove');
// 編集
Route::get('rental/edit','RentalController@edit');
Route::post('rental/edit','RentalController@update');
//検索
Route::get('rental/find','RentalController@find');
Route::post('rental/find','RentalController@search');
//部分検索
Route::get('rental/show','RentalController@show');
