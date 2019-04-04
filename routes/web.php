<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => false]);
    Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('profile','HomeController@profile');
    Route::get('/penghargaan', 'PenghargaanController@index')->name('penghargaan');
    Route::get('/orders', 'OrderController@index');
    Route::get('/anggota', 'HomeController@anggota')->name('anggota');
    Route::get('/changePassword','HomeController@showChangePasswordForm');
    Route::get('/orders/takeLog','OrderController@log');

    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
    Route::post('/changeName','HomeController@changeName')->name('changeName');
    Route::post('/orders/masak', 'OrderController@masak')->name('order.masak');
    Route::post('/orders/takeLog', 'OrderController@takeLog')->name('order.log');
    Route::post('/orders/becomeChef', 'OrderController@becomeChef')->name('order.becomeChef');
    Route::post('/orders/laporan', 'OrderController@laporan')->name('order.laporan');
    Route::post('/orders/{id}','OrderController@update')->name('order.update');
    Route::post('profile', 'HomeController@update_avatar');
    Route::post('/orders', 'OrderController@store')->name('order.store');


});

