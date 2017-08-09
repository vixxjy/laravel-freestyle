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

Route::get('users', 'ChartController@index');

Route::get('users/data', ['as'=>'provide.data','uses'=>'ChartController@getData']);

Route::get('events', 'EventController@index');

Route::resource('posts', 'PostsController');

Route::get('download-csv', ['as' => 'csv', 'uses' => 'EventController@getCSV']);