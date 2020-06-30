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



Route::get('/', 'HomeController@index')->name('home');
Route::get('/login', 'HomeController@index')->name('login');
Route::get('/detail/{slug}', 'DetailController@index')->name('detail');
Route::get('/payment', 'PaymentController@index')->name('payment');
Route::get('/success', 'PaymentController@success')->name('success');
Auth::routes();


// Route::get('/admin', 'Admin\DashboardController@index')->name('admin');

// Route::prefix('admin')->namespace('admin')->group(function() {
//     Route::get('/', 'DashboardController@index')->name('admin');
// });
Route::prefix('admin')->namespace('admin')->middleware(['auth','admin'])->group(function() {
    Route::get('/', 'DashboardController@index')->name('admin');
    Route::resource('/product', 'ProductController');
    Route::resource('/gallery', 'GalleryController');
    Route::resource('/transaction', 'TransactionController');
    Route::resource('/topping', 'ToppingController');
});
