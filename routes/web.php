<?php

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', 'AuthController@login');

Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', 'DashboardController@dashboard');
});
