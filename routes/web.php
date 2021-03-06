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
Route::get('/home', [
    'as' => 'home',
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
    Route::match(['get', 'post'], '/admin/slider/destroy/{id}', ['as' => 'slider-delete', 'uses' => 'Admin\SliderController@destroy']);
//  Products
    Route::match(['get', 'post'], '/admin/product/create', ['as' => 'product-create', 'uses' => 'Admin\ProductController@create']);
    Route::get('/admin/product/list', ['as' => 'product-list', 'uses' => 'Admin\ProductController@list']);
    Route::match(['get', 'post'], '/admin/product/edit/{id}', ['as' => 'product-edit', 'uses' => 'Admin\ProductController@edit']);
    Route::match(['get', 'post'], '/admin/product/destroy/{id}', ['as' => 'product-delete', 'uses' => 'Admin\ProductController@destroy']);

//  Category
    Route::get('/admin/category/list', ['as' => 'category-list', 'uses' => 'Admin\CategoryController@list']);
    Route::match(['get', 'post'], '/admin/category/create', ['as' => 'category-create', 'uses' => 'Admin\CategoryController@create']);
    Route::match(['get', 'post'], '/admin/category/edit/{id}', ['as' => 'category-edit', 'uses' => 'Admin\CategoryController@edit']);
    Route::match(['get', 'post'], '/admin/category/destroy/{id}', ['as' => 'category-delete', 'uses' => 'Admin\CategoryController@destroy']);
//  Bill
    Route::post('/admin/bill/update', ['as' => 'bill-update', 'uses' => 'Admin\BillController@update']);
    Route::get('/admin/comment/list', ['as' => 'comment-list', 'uses' => 'Admin\CommentController@list']);
//  Article
    Route::match(['get', 'post'], '/admin/article/create', ['as' => 'article-create', 'uses' => 'Admin\ArticleController@create']);
    Route::match(['get', 'post'], '/admin/article/edit/{id}', ['as' => 'article-edit', 'uses' => 'Admin\ArticleController@edit']);

    Route::match(['get', 'post'], '/admin/websiteconfig/create', ['as' => 'websiteconfig-create', 'uses' => 'Admin\WebsiteconfigController@create']);
    Route::get('/admin/websiteconfig/list', ['as' => 'websiteconfig-list', 'uses' => 'Admin\WebsiteconfigController@list']);
    Route::match(['get', 'post'], '/admin/websiteconfig/edit/{id}', ['as' => 'websiteconfig-edit', 'uses' => 'Admin\WebsiteconfigController@edit']);

    Route::get('subscribe-list', ['as' => 'subscribe-list', 'uses' => 'Admin\DashboardController@subscribe']);
});

Route::post('/add-to-cart', ['as' => 'add-to-cart', 'uses' => 'CartController@add']);
Route::match(['get', 'post'], '/send-email', ['as' => 'send-email', 'uses' => 'MailController@send']);
Route::match(['get', 'post'], '/dat-hang', ['as' => 'checkout', 'uses' => 'PageController@checkout']);
Route::match(['get', 'post'], '/subscribe', ['as' => 'subscribe', 'uses' => 'PageController@subscribe']);
Route::get('/dang-ky-thanh-cong', ['as' => 'subscribed', 'uses' => 'PageController@subscribed']);
Route::get('/tim-kiem', ['as' => 'search', 'uses' => 'PageController@search']);
Route::post('comment', ['as' => 'comment', 'uses' => 'PageController@comment']);
Route::get('chinh-sach-giao-hang', ['as' => 'direct', 'uses' => 'PageController@direct']);
