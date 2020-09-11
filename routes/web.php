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

//index page
Route::get('/', function () {
    return view('index') ;
});

//hotels page
Route::get('/wahana', function () {
    return view('wahana') ;
});


//destination page
Route::get('/kuliner', function () {
    return view('kuliner') ;
});

//siswa
Route::get('/siswa','SiswaController@index');

//jurusan
Route::get('/jurusan','JurusanController@index');

