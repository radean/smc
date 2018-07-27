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

    $tasks = App\Task::all();

    return view('home', compact('name', 'tasks'));

});
Route::get('/','TasksController@home');

//  Task Details
//===============
Route::get('/tasks/{task}', 'TasksController@show');


//  Home Page
//===============
Route::get('/tasks', 'TasksController@index');


//  About Page
//===============
Route::get('/about', 'MainController@index');


//  Services Page
//===============
Route::get('/services', 'MainController@services');
//
// Children Page
//=============
//H  M  S
Route::get('/services/hmm', 'MainController@hmm');


Route::get("/services/psl", "MainController@psl");


Route::get('/services/PLSS', "MaionController@plss");




//  Contact Page
//===============
Route::get('/contact', 'MainController@contact');
