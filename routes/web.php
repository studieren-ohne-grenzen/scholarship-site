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


Route::get('/about', 'ApplicationController@about');
Route::get('/imprint', 'ApplicationController@imprint');
Route::get('/apply', 'ApplicationController@apply');
Route::get('/upload', 'ApplicationController@upload');
Route::post('/uploaded', 'ApplicationController@createUpload');
Route::get('/step1', 'ApplicationController@step1');
Route::post('/step2', 'ApplicationController@step2save');
Route::post('/step3', 'ApplicationController@step3save');
Route::post('/step4', 'ApplicationController@step4save');
Route::post('/step5', 'ApplicationController@step5save');
Route::post('/step6', 'ApplicationController@step6save');
Route::post('/summary', 'ApplicationController@summarysave');
Route::post('/submitted', 'ApplicationController@create');
Route::get('/step2', 'ApplicationController@step2');
Route::get('/step3', 'ApplicationController@step3');
Route::get('/step4', 'ApplicationController@step4');
Route::get('/step5', 'ApplicationController@step5');
Route::get('/step6', 'ApplicationController@step6');
Route::get('/summary', 'ApplicationController@summary');
Route::get('/', 'ApplicationController@index');
