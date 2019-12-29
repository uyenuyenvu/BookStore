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
Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin'
], function (){
    // Trang dashboard - trang chủ admin
    Route::get('/dashboard', 'DashboardController@index')->name('backend.dashboard');
    // Quản lý sản phẩm
    Route::group(['prefix' => 'products'], function(){
        Route::get('/', 'BookController@index')->name('backend.product.index');
        Route::get('/create', 'BookController@create')->name('backend.product.create');
        Route::get('/edit/{id}', 'BookController@edit')->name('backend.product.edit');
    });
    //quản lí người dùng
    Route::group(['prefix' => 'users'], function(){
        Route::get('/', 'UserController@index')->name('backend.user.index');
        Route::get('/create', 'UserController@create')->name('backend.user.create');
        Route::get('/edit/{id}', 'UserController@edit')->name('backend.user.edit');
    });
    //quản lí danh muc
    Route::group(['prefix' => 'categories'], function(){
        Route::get('/', 'CategoryController@index')->name('backend.category.index');
        Route::get('/create', 'CategoryController@create')->name('backend.category.create');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('backend.category.edit');
    });
});

//frontend
Route::group([
    'namespace' => 'Frontend',
    'prefix' => 'home'
], function (){
    Route::get('/', 'HomeController@index')->name('frontend.home.index');
    Route::get('/show/{id}', 'HomeController@show')->name('frontend.home.show');
});
