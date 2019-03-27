<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
    Route::get('/anggota', 'HomeController@anggota')->name('anggota')->middleware('verified');

    // ROUTE UNTUK ORDERS

    Route::post('/orders/masak', 'OrderController@masak')->name('order.masak')->middleware('verified');
    Route::get('/orders/takeLog','OrderController@log')->middleware('verified');
    Route::post('/orders/takeLog', 'OrderController@takeLog')->name('order.log')->middleware('verified');

    Route::post('/orders/becomeChef', 'OrderController@becomeChef')->name('order.becomeChef')->middleware('verified');
    Route::post('/orders/{id}','OrderController@update')->name('order.update')->middleware('verified');

    Route::get('/orders', 'OrderController@index')->middleware('verified');
    Route::post('/orders', 'OrderController@store')->name('order.store')->middleware('verified');

    // ROUTE UNTUK PROFILE
    Route::get('profile','HomeController@profile');
	Route::post('profile', 'HomeController@update_avatar');

    Route::get('/penghargaan', 'PenghargaanController@index')->name('penghargaan')->middleware('verified');

});

