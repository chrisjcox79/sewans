<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'Home\IndexController@index')->name('home');
Route::get('/men.html', 'Home\CategoryController@men')->name('category.men');
Route::get('/women.html', 'Home\CategoryController@women')->name('category.women');
Route::get('/wishlist.html', 'Home\WishlistController@index')->name('wishlist.index');
Route::resource('/account/order', 'Home\OrderController');
Route::resource('/products', 'Home\ProductController');
Route::resource('/cart', 'Home\CartController');


Route::prefix('admin')->group(function () {
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login');
    Route::get('register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Admin\RegisterController@register');
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('/','AdminController@index')->name('admin.home');
    Route::resource('category','Admin\CategoryController');
    Route::get('categoryapi','Admin\CategoryController@categoryapi')->name('category.api');
    Route::get('getAttr','Admin\TypeController@getAttr')->name('type.getAttr');
    Route::resource('types','Admin\TypeController');
    Route::resource('brand','Admin\BrandController');
    Route::resource('coupons','Admin\CouponController');
    Route::resource('product','Admin\ProductController');
    Route::resource('attribute','Admin\AttributeController');
    Route::resource('users','Admin\UserController');
});



//Route::resource('admin/product','Admin\ProductController');
