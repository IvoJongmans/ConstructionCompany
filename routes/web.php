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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', 'RegistreerController@create');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', 'InlogController@login');

Route::get('/logout', 'UitlogController@logout');
