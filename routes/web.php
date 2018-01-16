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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/result', 'ResursiController@getData');
Route::get('/result/{id}', 'ResursiController@show');
Route::get('/result2', 'ResursiController@search');


Route::get('crud', 'ResursiController@home');
Route::get('crud/create',function(){
	return view('create');});

Route::post('crud/insert', 'ResursiController@store');

Route::get('crud/create_gramata', function(){
	return view('create_gramata');});

Route::get('crud/create_zurnals', function(){
	return view('create_zurnals');});

Route::post('crud/insert_zurnals', 'ZurnalsController@store');
Route::post('crud/insert_gramata', 'GramataController@store');

Route::get('crud/update/{id}', 'ResursiController@update');
Route::post('crud/edit/{id}', 'ResursiController@edit');

Route::get('crud/delete/{id}', 'ResursiController@destroy');