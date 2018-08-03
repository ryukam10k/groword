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

Route::get('word', 'WordController@index');
Route::get('word/add', 'WordController@add');
Route::post('word/add', 'WordController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
