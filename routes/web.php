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



Route::get('/', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');
Route::patch('/projects/{project}', 'ProjectsController@update');
Route::delete('/projects/{project}', 'ProjectsController@destroy');
Route::get('/projects/{project}', 'ProjectsController@show');
Route::get('projects/{project}/edit', 'ProjectsController@edit');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::delete('/tasks/{task}', 'ProjectTaskSController@destroy');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
