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



Route::group(['as'=> 'teacher','prefix' => 'teacher', 'namespace' => 'Teacher', 'middleware' => ['auth', 'teacher']],
    function() {
        Route::get('/teachers', 'TeacherController@index')->name('teacher');
    });

Route::get('/createWord',['as' =>'createWord','uses'=>'WordTestController@createWordDocx'])->name('publications.word');
Route::get('invoices/download', 'InvoiceController@download');
Route::get('/test', 'PDFTestController@index');

Route::resource('qqsons','QqsonController');

Route::get('/qqsons','QqsonController@index')->name('Qqson.qqson_show');
Route::get('/qqsons/qqson_create','QqsonController@create')->name('Qqson.qqson_create');
Route::post('/qqsons','QqsonController@store')->name('Qqson.store');
Route::get('/qqsons/{qqson}','QqsonController@show')->name('Qqson.qqson_show');
Route::get('/qqsons/{qqson}/qqson_edit','QqsonController@edit')->name('Qqson.qqson_edit');
Route::put('/qqsons/{contact}','QqsonController@update')->name('Qqson.qqson_update');
Route::put('/qqsons/{contact}','QqsonController@destroy')->name('Qqson.qqson_destroy');

Route::resource('confs','ConfController');
Route::get('/confs','ConfController@index')->name('Conf.conf_show');
Route::get('/confs/conf_create','ConfController@create')->name('Conf.conf_create');
Route::post('/confs','ConfController@store')->name('Conf.store');
Route::get('/confs/{conf}','ConfController@show')->name('Conf.conf_show');
Route::get('/confs/{conf}/conf_edit','ConfController@edit')->name('Conf.conf_edit');
Route::put('/confs/{contact}','ConfController@update')->name('Conf.conf_update');
Route::put('/confs/{contact}','ConfController@destroy')->name('Conf.conf_destroy');
