<?php

    Route::get('/', function () {
        return view('welcome');
    });
    Auth::routes();
//    Route::post('post');
    Route::post('network', 'NetworkController@store');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
    Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');