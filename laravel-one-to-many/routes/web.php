<?php

use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'EmployeeController@index')->name('new_home');
Route::get('/show_employee/{id}', 'EmployeeController@show')->name('show_employee');

Route::get('/edit_employee/{id}', 'EmployeeController@edit')->name('edit_employee');
Route::post('/update_employee/{id}', 'EmployeeController@update')->name('update_employee');
