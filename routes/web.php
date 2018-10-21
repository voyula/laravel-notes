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
    return view('user.welcome');
});

Auth::routes();

Route::get('/home', 'User\HomeController@index')->name('home');

Route::prefix('/notes')->group(function () {
    Route::get('/create', 'User\NoteController@create')->name('notes.create');
    Route::post('/store', 'User\NoteController@store')->name('notes.store');
    Route::get('/edit/{id}', 'User\NoteController@edit')->name('notes.edit');
    Route::post('/update/{id}', 'User\NoteController@update')->name('notes.update');
    Route::get('/delete/{id}', 'User\NoteController@delete')->name('notes.delete');
});

Route::prefix('/admin')->group(function () {
    // Authentication Routes...
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::get('/home', 'Admin\AdminController@index')->name('admin.home');
});
