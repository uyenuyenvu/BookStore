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
    return redirect('/home');
});
Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin'
], function (){
    // Trang dashboard - trang chủ admin
    Route::get('/', 'DashboardController@index')->name('backend.dashboard');
    // Quản lý sản phẩm
    Route::group(['prefix' => 'products'], function(){
        Route::get('/', 'BookController@index')->name('backend.product.index');
        Route::get('/create', 'BookController@create')->name('backend.product.create');
        Route::post('/store', 'BookController@store')->name('backend.product.store');
        Route::post('/update/{id}','BookController@update')->name('backend.product.update');
        Route::get('/show/{id}', 'BookController@show')->name('backend.product.show');
        Route::get('/edit/{book}','BookController@edit')->name('backend.product.edit')->middleware('can:edit,book');
        Route::get('/destroy/{book}','BookController@destroy')->name('backend.product.destroy')->middleware('can:delete,book');
        Route::get('/show_images/{id}', 'BookController@show_images')->name('backend.product.show_images');
    });
    //quản lí người dùng
    Route::group(['prefix' => 'users'], function(){
        Route::get('/', 'UserController@index')->name('backend.user.index');
        Route::get('/edit/{id}', 'UserController@edit')->name('backend.user.edit');
        Route::get('/show/{id}', 'UserController@show')->name('backend.user.show');

        Route::get('/showBooks/{id}', 'UserController@showBooks')->name('backend.user.showBooks');
        Route::get('/destroy/{id}', 'UserController@destroy')->name('backend.user.destroy');
        Route::post('/update/{id}','UserController@update')->name('backend.user.update');

    });
    //quản lí danh muc
    Route::group(['prefix' => 'categories'], function(){
        Route::get('/', 'CategoryController@index')->name('backend.category.index');
        Route::get('/create', 'CategoryController@create')->name('backend.category.create');
        Route::post('/create', 'CategoryController@store')->name('backend.category.store');
        Route::post('/update/{id}','CategoryController@update')->name('backend.category.update');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('backend.category.edit');
        Route::get('/showBooks/{id}', 'CategoryController@showBooks')->name('backend.category.showBooks');
    });
    //quản lí don hang
    Route::group(['prefix' => 'orders'], function(){
        Route::get('/showBooks/{id}', 'OrderController@showBooks')->name('backend.order.showBooks');
    });
});
Auth::routes();
//frontend
Route::group([
    'namespace' => 'Frontend',
    'prefix' => 'home'
    ], function (){
        Route::get('/', 'HomeController@index')->name('frontend.home.index');
        Route::get('/show/{id}', 'HomeController@show')->name('frontend.home.show');
        Route::post('/store','UserController@store')->name('frontend.home.store');
        Route::get('/about','HomeController@about')->name('frontend.home.about');
    Route::get('/contact','HomeController@contact')->name('frontend.home.contact');
        Route::get('/showCart','HomeController@showCart')->name('frontend.home.showCart');
        Route::get('/showAccount/{id}','UserController@show')->name('frontend.home.showAccount');
        Route::get('/detailBook/{slug}','HomeController@showBook')->name('frontend.home.showBook');
    });




Route::get('/formLogin','Auth\LoginController@showFormLogin')->name('showFormLogin');
Route::post('/loginStore','Auth\LoginController@loginStore')->name('loginStore');
Route::get('/logout','Auth\LoginController@logout')->name('logout');
