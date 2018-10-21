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

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/notes')->group(function () {
    Route::get('/create', 'NoteController@create')->name('notes.create');
    Route::post('/store', 'NoteController@store')->name('notes.store');
    Route::get('/edit/{id}', 'NoteController@edit')->name('notes.edit');
    Route::post('/update/{id}', 'NoteController@update')->name('notes.update');
    Route::get('/delete/{id}', 'NoteController@delete')->name('notes.delete');
});

Route::prefix('/admin')->group(function () {

});
