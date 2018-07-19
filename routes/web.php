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

//  Home Page
//===============
Route::get('/', function () {

    $name = "Raheel Shaikh";

    $tasks = DB::table('tasks')->get();

    return view('home', compact('name', 'tasks'));

});

Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->get();

    return view('task.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {

    $task = DB::table('tasks')->find($id);

    return view('task.show', compact( 'task'));
});
