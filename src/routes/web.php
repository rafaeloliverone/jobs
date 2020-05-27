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

Route::get('/search', 'JobController@search')->name('jobs.search');
Route::resource('/jobs', 'JobController');

Route::get('/companies/{company?}/jobs', 'CompanyController@createjob')->name('companies.createjob');
Route::resource('/companies', 'CompanyController');
