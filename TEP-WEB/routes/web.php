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

Route::get('/blog', [
    'as' => 'blog.index',
    'uses' => 'BlogController@index'
]);

Route::get('/api', [
   'uses' => 'BlogController@apiCall'
]);
