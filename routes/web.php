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

Route::get('index', 'TaskController@index');

Route::get('index/create', 'TaskController@create');

Route::post('index/save', 'TaskController@save');

Route::post('done', 'TaskController@done');

Route::get('index/{id}', 'TaskController@show');

Route::get('index/{id}/edit', 'TaskController@edit');

Route::post('index/{id}/update', 'TaskController@update');

Route::get('{id}/destroy', 'TaskController@destroy');

Route::get('categories', function(){
    $categories = App\Category::find();
    $task = new App\Task;
    $task->id_category = $categories->id;
    // $task->titre = 'Essai';
    $task->save();

    dd([$task= $categories->$task]);
});
