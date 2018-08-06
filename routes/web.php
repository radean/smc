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
Route::get('/services', 'MainController@services')->name('service');
//
// Children Page
//=============
//H  M  S
Route::get('/services/hmm', 'MainController@hmm')->name('hmm');


Route::get("/services/perma", "MainController@perma")->name('perma');


Route::get('/services/eukor', "MainController@eukor")->name('eukor');


Route::get('/services/hglovis', "MainController@hglovis")->name('hglovis');


Route::get('/services/transportation', "MainController@transportation")->name('transportation');


Route::get('/services/logistics', "MainController@logistics")->name('logistics');


//  Contact Page
//===============
Route::get('/contact', 'MainController@contact');
