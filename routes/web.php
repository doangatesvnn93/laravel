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

Route::get('/', [
    'as'    => 'trang-chu',
    'uses'  => 'PageController@index'
]);

Route::get('index', [
    'as'    => 'index',
    'uses'  => 'PageController@index'
]);

Route::get('detail', [
    'as'    => 'chi-tiet',
    'uses'  => 'PageController@detail'
]);

Route::get('list', [
    'as'    => 'danh-sach',
    'uses'  => 'PageController@list'
]);

Route::get('contact', [
    'as'    => 'contact',
    'uses'  => 'PageController@contact'
]);

Route::get('get-content/{id}', ['as' => 'get-content', 'uses'  => 'PageController@get']);

