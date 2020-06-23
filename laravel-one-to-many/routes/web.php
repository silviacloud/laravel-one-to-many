<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'TasksController@index')->name('home');
Route::get('/edit/{id}', 'TasksController@edit')->name('edit');
Route::post('/update/{id}', 'TasksController@update')->name('update');
