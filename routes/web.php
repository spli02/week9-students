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

Auth::routes();

Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('/student/{student_slug}','StudentController@show');
Route::post('/student/{student_slug}','StudentController@show');

Route::get('/students','StudentController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
