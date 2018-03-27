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

Route::get('chi-tiet/{slug}', [
    'as' => 'detail',
    'uses' => 'PageController@detail'
]);

Route::get('san-pham', [
    'as' => 'list',
    'uses' => 'PageController@list'
]);

Route::get('lien-he', [
    'as' => 'contact',
    'uses' => 'PageController@contact'
]);
Route::get('ve-chung-toi', [
    'as' => 'about',
    'uses' => 'PageController@about'
]);
Route::get('chinh-sach-giao-hang', [
    'as' => 'delivery',
    'uses' => 'PageController@delivery'
]);

Route::get('404.html', [
    'as' => '404',
    'uses' => 'InitController@error'
]);

Route::get('get-content/{id}', ['as' => 'get-content', 'uses' => 'PageController@get']);

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', ['as' => 'admin', 'uses' => 'Admin\DashboardController@overview']);
//  Sliders
    Route::match(['get', 'post'], '/admin/slider/create', ['as' => 'slider-create', 'uses' => 'Admin\SliderController@create']);
    Route::get('/admin/slider/list', ['as' => 'slider-list', 'uses' => 'Admin\SliderController@list']);
    Route::match(['get', 'post'], '/admin/slider/edit/{id}', ['as' => 'slider-edit', 'uses' => 'Admin\SliderController@edit']);
//  Products
    Route::match(['get', 'post'], '/admin/product/create', ['as' => 'product-create', 'uses' => 'Admin\ProductController@create']);
    Route::get('/admin/product/list', ['as' => 'product-list', 'uses' => 'Admin\ProductController@list']);
    Route::match(['get', 'post'], '/admin/product/edit/{id}', ['as' => 'product-edit', 'uses' => 'Admin\ProductController@edit']);

//  Category
    Route::get('/admin/category/list', ['as' => 'category-list', 'uses' => 'Admin\CategoryController@list']);
    Route::match(['get', 'post'], '/admin/category/create', ['as' => 'category-create', 'uses' => 'Admin\CategoryController@create']);
    Route::match(['get', 'post'], '/admin/category/edit/{id}', ['as' => 'category-edit', 'uses' => 'Admin\CategoryController@edit']);
//  Bill
    Route::post('/admin/bill/update', ['as' => 'bill-update', 'uses' => 'Admin\BillController@update']);

});

Route::post('/add-to-cart', ['as' => 'add-to-cart', 'uses' => 'CartController@add']);
//Route::get('clear', ['as' => '/clear-session', 'uses' => 'CartController@clearCart']);
Route::match(['get', 'post'], '/dat-hang', ['as' => 'checkout', 'uses' => 'PageController@checkout']);
Route::match(['get', 'post'], '/subscribe', ['as' => 'subscribe', 'uses' => 'PageController@subscribe']);
Route::get('/dang-ky-thanh-cong', ['as' => 'subscribed', 'uses' => 'PageController@subscribed']);
