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

Route::resource('/jobs', 'JobController');


Route::get('/search', 'CompanyController@search')->name('companies.search');
Route::get('/companies/{company?}/jobs', 'CompanyController@createjob')->name('companies.createjob');
Route::resource('/companies', 'CompanyController');
