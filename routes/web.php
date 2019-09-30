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

Route::get('/', 'ProductController@index');
Route::get('/search', 'ProductController@search');
Route::get('/category/{category}', 'ProductController@category');
Route::get('/product/{product}', 'ProductController@show');

Route::get('/cart', 'CartController@index');
Route::post('/cart', 'CartController@store');
Route::delete('/cart/{product}', 'CartController@destroy');
Route::get('/empty', 'CartController@empty');

Route::get('/checkout', 'CheckoutController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
