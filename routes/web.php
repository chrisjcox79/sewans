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
Route::resource('/product', 'Home\ProductController');
Route::resource('/cart', 'Home\CartController');




Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login');
Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register', 'Admin\RegisterController@register');
Route::post('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');
Route::get('admin', 'AdminController@index')->name('admin.home');


Route::resource('admin/category','Admin\CategoryController');
Route::get('admin/categoryapi','Admin\CategoryController@categoryapi')->name('category.api');
Route::resource('admin/types','Admin\TypeController');
Route::resource('admin/brand','Admin\BrandController');
Route::resource('admin/coupons','Admin\CouponController');
Route::resource('admin/product','Admin\ProductController');
//Route::resource('admin/product','Admin\ProductController');