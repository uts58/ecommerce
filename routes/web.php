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

Route::get('/', 'PostController@index')->name('home');
Route::group(['middleware' => ['nosess']], function () {
    Route::get('/register', 'RegistrationController@create')->name('register');

    Route::post('/register', 'RegistrationController@store');


    Route::get('/login', 'SessionController@create')->name('login');
    Route::post('/login', 'SessionController@login');
});
Route::get('/logout', 'SessionController@destroy')->name('logout');
// Route::get('/home','SessionController@home');


Route::group(['middleware' => ['sess']], function () {

    Route::group(['middleware' => ['seller']], function () {
        Route::prefix('seller')->group(function () {
            Route::get('/', 'SellerController@index')->name('sellerhome');
            Route::get('/add', 'SellerController@add')->name('add');
            Route::get('/edit/{id}', 'SellerController@editproduct')->name('editproduct');
            Route::post('/add', 'SellerController@store');
            Route::get('/edit', 'SellerController@edit')->name('edit');
            Route::post('/edit', 'SellerController@update');
            Route::get('/profile', 'SellerController@profile')->name('sprofile');
            Route::get('/profile/{id}', 'SellerController@editseller')->name('seller.edit');
            Route::post('/profile/{id}', 'SellerController@updatesellerprof');
        });
    });
    Route::group(['middleware' => ['customer']], function () {
        Route::prefix('user')->group(function () {
            Route::get('/', 'CustomerController@index')->name('custmerhome');
            Route::get('/item', 'CustomerController@show');
            Route::post('/add/{id}', 'CustomerController@add')->name('addc');

            Route::get('/cart', 'CustomerController@cart')->name('cart');
            Route::get('/delete/{id}', 'CustomerController@cartDelete')->name('cartDelete');
            Route::get('/order', 'CustomerController@order')->name('order');
            Route::get('/profile', 'CustomerController@cprofile')->name('cprofile');
            Route::get('/profile/{id}', 'CustomerController@editcustomer')->name('customer.edit');
            Route::post('/profile/{id}', 'CustomerController@updateedited');
        });
    });
    Route::group(['middleware' => ['admin']], function () {
//      Route::post('/updateSeller', 'adminController@updateSeller');
        Route::prefix('admin')->group(function () {
            Route::get('/', 'adminController@index')->name('adminController.home');
            Route::get('/sellerApproval', 'adminController@sellerApproval')->name('adminController.sellerApproval');
            Route::get('/makeSellerValid/{id}', 'adminController@makeSellerValid')->name('adminController.makeSellerValid');
            Route::get('/makeSellerInvalid/{id}', 'adminController@makeSellerInvalid')->name('adminController.makeSellerInvalid');
            Route::get('/editSeller/{id}', 'adminController@editSeller')->name('adminController.editSeller');
            Route::get('/deleteSeller/{id}', 'adminController@deleteSeller')->name('adminController.deleteSeller');
            Route::post('/updateSeller', 'adminController@updateSeller');
            Route::get('/editDeleteSeller', 'adminController@editDeleteSeller')->name('adminController.editDeleteSeller');
            Route::get('/isFeatured/{id}', 'adminController@isFeatured')->name('adminController.isFeatured');
            Route::get('/isNotFeatured/{id}', 'adminController@isNotFeatured')->name('adminController.isNotFeatured');
            Route::get('/deleteProduct/{id}', 'adminController@deleteProduct')->name('adminController.deleteProduct');
            Route::get('/deleteProduct/{id}', 'adminController@deleteProduct')->name('adminController.deleteProduct');
            Route::get('/statistics', 'adminController@statistics')->name('adminController.statistics');
            Route::get('/viewCarts', 'adminController@viewCarts')->name('adminController.viewCarts');
            Route::get('/approveCart/{id}', 'adminController@approveCart')->name('adminController.approveCart');
        });
    });
});
