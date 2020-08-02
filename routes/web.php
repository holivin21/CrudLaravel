<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProfileController@Profile');
Route::get('tambah','ProfileController@Tambah');
Route::post('tambah/menambah','ProfileController@Menambah');
Route::get('edit/{id}','ProfileController@TampilEdit');
Route::put('edit/update/{id}','ProfileController@Edit' );
Route::get('delete/{id}','ProfileController@Delete');
