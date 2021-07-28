<?php

use app\Http\Controllers\companiesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
/*
route form login register page to home page
*/
Route::get('/home', 'HomeController@index')->name('home');

/*
route for companies 
*/
Route::get('Companies_show', 'CompaniesController@show');
Route::get('Companies_Edit/{id}', 'CompaniesController@edit');
Route::post('Companies_Update/{id}', 'CompaniesController@Update')->Name('Companies_Update');
Route::get('Companies_Create', 'CompaniesController@create');
Route::post('Companies_Record', 'CompaniesController@store');
Route::get('Companies_Delete/{id}', 'CompaniesController@destroy');

/*
route for companies 
*/

Route::get('Employees_show', 'EmployeesController@show');
Route::get('Employees_Create', 'EmployeesController@create');
Route::post('Employees_Record', 'EmployeesController@store');
Route::get('Employees_Edit/{ID}', 'EmployeesController@edit');
Route::get('Employees_Delete/{ID}', 'EmployeesController@destroy');
Route::post('Employees_Update/{ID}', 'EmployeesController@Update')->Name('Employees_Update');
