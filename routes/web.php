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
Route::get('eng_word/add', 'EngWordController@add');
Route::post('eng_word/add', 'EngWordController@create');
Route::get('eng_word/show', 'EngWordController@show');
Route::get('eng_word/edit', 'EngWordController@edit');
Route::post('eng_word/edit', 'EngWordController@update');
Route::get('eng_word/del', 'EngWordController@delete');
Route::post('eng_word/del', 'EngWordController@remove');

/* Sentense */
Route::get('sentence', 'SentenceController@index');
Route::get('sentence/add', 'SentenceController@add');
Route::post('sentence/add', 'SentenceController@create');
Route::get('sentence/show', 'SentenceController@show');
Route::get('sentence/edit', 'SentenceController@edit');
Route::post('sentence/edit', 'SentenceController@update');
Route::get('sentence/del', 'SentenceController@delete');
Route::post('sentence/del', 'SentenceController@remove');

/* WordApi */
Route::resource('wordapi', 'WordApiController');
Route::get('wordapi/mean/{name}', 'WordApiController@mean');