<?php

use Illuminate\Support\Facades\Route;

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

Route::view('ajaxinsert','ajaxinsert');
Route::get('ajax/insert','ajaxController@insert')->name('ajaxinsert');
Route::get('ajax/select','ajaxController@select')->name('ajaxselect');

Route::get('index','ajaxController@index')->name("index");
Route::get('edit','ajaxController@edit')->name("edit");
Route::get('edit1/{id}','ajaxController@edit1');
Route::get('edit2/{id}','ajaxController@edit2');
Route::get('delete/{id}','ajaxController@delete')->name("delete");
Route::get('/update','ajaxController@update')->name('ajaxupdate');