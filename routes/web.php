<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/publications','PublicationController@index');
Route::get('/tasks','TasksController@index')->name('tasks.index');
Route::get('/tasks/create','TasksController@create')->name('tasks.create');
Route::post('/tasks/store','TasksController@store')->name('tasks.store');


