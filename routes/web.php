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

Route::get('/home', 'HomeController@index')->name('home');

//Resource Groups
Route::resource('/employees', 'employeesController');
Route::resource('/companies', 'companiesController');

//Auth
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
