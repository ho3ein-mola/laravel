<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('/signup','UserController@postSignUp')->name('signup');
Route::get('/dashboard','UserController@getDashboard')->name('dashboard')->middleware('auth');
Route::get('/dashboard','PostController@show')->name('show')->middleware('auth');
Route::post('/createPost','PostController@createPost')->name('createPost');
Route::post('/signin','UserController@postSignIn')->name('signin');

