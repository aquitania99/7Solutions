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

Route::get('/', 'Dashboard\DashboardController@index');

Route::name('dashboard')->get('/dashboard', 'Dashboard\DashboardController@index');

Route::prefix('user')->group(function() {
    Route::get('/', 'User\UserController@index');
    Route::get('/add', 'User\UserController@create');
    Route::post('/user','User\UserController@store');
});


Route::get('/scratch', 'Scratch\ScratchController@index');
