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

Route::get('/', 'WordController@index');

/* Word */
Route::get('word', 'WordController@index');
Route::get('word/add', 'WordController@add');
Route::post('word/add', 'WordController@create');
Route::get('word/show', 'WordController@show');
Route::get('word/edit', 'WordController@edit');
Route::post('word/edit', 'WordController@update');
Route::get('word/del', 'WordController@delete');
Route::post('word/del', 'WordController@remove');

/* Tag */
Route::get('tag', 'TagController@index');
Route::get('tag/add', 'TagController@add');
ROute::post('tag/add', 'TagController@create');

/* Auth */
Auth::routes();

/* Home */
Route::get('/home', 'HomeController@index')->name('home');

/* Eng_Word */
Route::get('eng_word', 'EngWordController@index');