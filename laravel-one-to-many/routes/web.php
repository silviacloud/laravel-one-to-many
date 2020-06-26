<?php

use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'EmployeeController@index')->name('new_home');
Route::get('/show_employee/{id}', 'EmployeeController@show')->name('show_employee');

Route::get('/edit_employee/{id}', 'LogController@edit')->name('edit_employee');
Route::post('/update_employee/{id}', 'LogController@update')->name('update_employee');
