<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

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

Route::prefix('admin')->middleware('is_admin')->group(function () {
    Route::get('/', 'AdminController@admin')->name('admin');
    Route::prefix('companies')->group(function () {
        Route::get('/', 'CompaniesController@index')->name('companies');
        Route::get('/create', 'CompaniesController@create')->name('create_companies');
        Route::post('/create', 'CompaniesController@store')->name('store_companies');
        Route::get('/update', 'CompaniesController@update')->name('update_companies');
        Route::post('/update', 'CompaniesController@save')->name('save_companies');
        Route::get('/delete', 'CompaniesController@delete')->name('delete_companies');
    });
    Route::prefix('employees')->group(function () {
        Route::get('/', 'EmployeesController@index')->name('employees');
        Route::get('/create', 'EmployeesController@create')->name('create_employees');
        Route::post('/create', 'EmployeesController@store')->name('store_employees');
        Route::get('/update', 'EmployeesController@update')->name('update_employees');
        Route::post('/update', 'EmployeesController@save')->name('save_employees');
        Route::get('/delete', 'EmployeesController@delete')->name('delete_employees');
    });
});
