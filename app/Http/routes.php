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
Route::get('/create', 'TasksController@create');
Route::post('tasks', 'TasksController@store');
Route::get('tasks/{id}', 'TasksController@show');
Route::get('tasks/edit/{id}', 'TasksController@edit');
Route::patch('/tasks/update/{id}', 'TasksController@update');