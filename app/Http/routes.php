<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/tasks', 'TasksController@index');
Route::get('create', 'TasksController@create');
Route::post('save', 'TasksController@store');
Route::get('tasks/{id}', 'TasksController@show');
Route::get('edit/{id}', 'TasksController@edit');
Route::patch('update/{id}', 'TasksController@update');
Route::get('delete/{id}', 'TasksController@destroy');
