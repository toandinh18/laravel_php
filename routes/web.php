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
    return view('welcome');
});

Route::resource('contacts','ContactController');

// Route::get('contacts', 'ContactController@index')->name('contacts.list');
// Route::get('contacts/edit/{id}', 'ContactController@edit')->name('contacts.edit');