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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');

Route::get('/admin/companies', 'CompaniesController@index')->middleware('is_admin')->name('companies');

Route::get('/admin/companies/create', 'CompaniesController@create')->middleware('is_admin')->name('create_companies');

Route::post('/admin/companies/store', 'CompaniesController@store')->middleware('is_admin')->name('store_companies');

Route::get('/admin/companies/delete', 'CompaniesController@delete')->middleware('is_admin')->name('delete_companies');

Route::post('/admin/companies/update', 'CompaniesController@update')->middleware('is_admin')->name('update_companies');

Route::post('/admin/companies/save', 'CompaniesController@save')->middleware('is_admin')->name('save_companies');