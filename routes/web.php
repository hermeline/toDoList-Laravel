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

Route::get('tasks', 'TaskController@index');

Route::get('tasks/create', 'TaskController@create');

Route::post('tasks/save', 'TaskController@save');

Route::post('done', 'TaskController@done');

Route::get('tasks/{id}', 'TaskController@show');

Route::get('tasks/{id}/edit', 'TaskController@edit');

Route::post('tasks/{id}/update', 'TaskController@update');

Route::get('{id}/destroy', 'TaskController@destroy');

Route::get('categories', function(){
    $categories = App\Category::find();


    dd([$task= $categories->$task]);
});
