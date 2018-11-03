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


Route::get('upload','UploadController@index');
Route::post('store','UploadController@store');
Route::get('show','UploadController@show');


Route::get('/file','FileController@showUploadForm')->name('upload.file');
Route::post('/file','FileController@storeFile');

Route::get('uploadedfile/{filename}','FileController@getFile')->name('get.file')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

