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
    'as' => 'landing',
    'uses' => 'PageController@index'
]);

Route::get('index', [
    'as' => 'index',
    'uses' => 'PageController@index'
]);

Route::get('detail/{slug}', [
    'as' => 'detail',
    'uses' => 'PageController@detail'
]);

Route::get('list', [
    'as' => 'danh-sach',
    'uses' => 'PageController@list'
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'PageController@contact'
]);

Route::get('get-content/{id}', ['as' => 'get-content', 'uses' => 'PageController@get']);

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', ['as' => 'admin', 'uses' => 'AdminController@index']);
//Sliders
    Route::match(['get', 'post'], '/admin/slider/create', ['as' => 'slider-create', 'uses' => 'SliderController@create']);
    Route::get('/admin/slider/list', ['as' => 'slider-list', 'uses' => 'SliderController@list']);
    Route::match(['get', 'post'], '/admin/slider/edit/{id}', ['as' => 'slider-edit', 'uses' => 'SliderController@edit']);
//Products
    Route::match(['get', 'post'], '/admin/product/create', ['as' => 'product-create', 'uses' => 'ProductController@create']);
    Route::get('/admin/product/list', ['as' => 'product-list', 'uses' => 'ProductController@list']);
    Route::match(['get', 'post'], '/admin/product/edit/{id}', ['as' => 'product-edit', 'uses' => 'ProductController@edit']);
});
