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

Route::get('/','pagesController@index')->name('home');
Route::get('/about','pagesController@about')->name('about');
Route::get('/products','pagesController@products')->name('products');
Route::get('/contact','pagesController@contact')->name('contact');
Route::get('/cart','pagesController@cart')->name('cart');
Route::get('/checkout','pagesController@checkout')->name('checkout');
Route::get('/login','pagesController@login')->name('login');
Route::get('/dashboard','pagesController@dashboard')->name('dashboard');
// for admin .. namespace(folder) , prefix (URL)
Route::prefix('admin')->namespace('admin')->group(function(){
    Route::get('/dashboard','pagesController@index')->name('admin.dashboard');
    Route::prefix('product')->group(function(){
        Route::get('/create','productsController@create')->name('add.products');
        Route::get('/all','productsController@products')->name('all.products');
    });
    Route::prefix('category')->group(function(){
        Route::get('/all','pagesController@categories')->name('admin.categories');
        Route::post('/save','pagesController@save_categories')->name('category.save');
    });
    Route::prefix('orders')->group(function(){
        Route::get('/new','OrderController@new')->name('new.orders');
        Route::get('/history','OrderController@history')->name('orders.history');
    });
    // customers
    Route::get('/customers','pagesController@customers')->name('admin.customers');
    // settings
    Route::get('/settings','pagesController@settings')->name('admin.settings');
});