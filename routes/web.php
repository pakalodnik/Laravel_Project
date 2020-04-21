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

#Route::apiResource('publications', 'PublicationController');
Route::resource('publications','PublicationController');

Route::get('/publications','PublicationController@index')->name('publications.publication_show');
Route::get('/publications/create','PublicationController@create')->name('publications.create');
Route::post('/publications','PublicationController@store')->name('publications.store');
Route::get('/publications/{publication}','PublicationController@show')->name('publications.show');
Route::get('/publications/{publication}/edit','PublicationController@edit')->name('publications.edit');
Route::put('/publications/{contact}','PublicationController@update')->name('publications.update');
Route::put('/publications/{contact}','PublicationController@destroy')->name('publications.destroy');

Route::get('/teachers','TeacherController@index')->name('teacher')->middleware('teacher');

Route::get('/publication', function () {
    return view('publication.publication_show');
})->name('publication');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

#Route::get('/publications','PublicationController@index');
Route::get('/tasks','TasksController@index')->name('tasks.index');
Route::get('/tasks/create','TasksController@create')->name('tasks.create');
Route::post('/tasks/store','TasksController@store')->name('tasks.store');

Route::group(['as'=> 'teacher','prefix' => 'teacher', 'namespace' => 'Teacher', 'middleware' => ['auth', 'teacher']],
    function() {
        Route::get('/teachers', 'TeacherController@index')->name('teacher');
    });

