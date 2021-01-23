<?php
use Illuminate\Http\Request;
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


//Auth::routes();
//Route::get('/', function () {
    //return view('home');
//});

Auth::routes(['register' => True]);
Route::get('/', 'HomeController@index')->name('index');
Route::get('home', 'HomeController@index')->name('index');
Route::get('dashboard', 'HomeController@index')->name('index');
Route::get('index', 'HomeController@index')->name('index');

Route::resource('medicines', 'MedicinesController');
Route::get('medicines-index','MedicinesController@index')->name('medicines.index');
Route::get('medicines-add','MedicinesController@create')->name('medicines.create');
Route::get('medicines-edit','MedicinesController@update')->name('medicines.update');
Route::get('medicines/{medicine}','MedicinesController@profile')->name('medicines.profile');

Route::resource('ambulances', 'AmbulanceController');
Route::get('ambulances-index','AmbulanceController@index')->name('ambulances.index');
Route::get('ambulances-create','AmbulanceController@create')->name('ambulances.create');

Route::resource('doctors', 'DoctorController');
Route::get('doctors-index','DoctorController@index')->name('doctors.index');
Route::get('doctors-create','DoctorController@create')->name('doctors.create');


Route::resource('categories', 'MedicinesCategoriesController');
Route::get('categories','MedicinesCategoriesController@index')->name('setting.medicine_categories');

Route::resource('company', 'CompanyController');
Route::get('company','CompanyController@index')->name('setting.company');




//Route::get('/categories', function () {
//return view('categories');
//});

