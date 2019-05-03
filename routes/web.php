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

// loading the default viewpage to show news
Route::get('/', 'ApiController@displayNews');
// This POST route will pass the selected news source id to the ApiController
// When user changes from cnn to bbc, then this route will be used to pass the news source id
Route::post('/sourceId', 'ApiController@displayNews');
