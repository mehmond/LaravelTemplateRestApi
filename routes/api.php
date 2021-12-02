<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//GETTING ALL EMPLOYEES 

Route::get('employees', 'App\Http\Controllers\EmployeesController@index');

//GETTING EMPLOYEE BY ID
Route::get('employees/{id}', 'App\Http\Controllers\EmployeesController@show');

//CREATE EMPLOYEE 
Route::post('insertEmployee', 'App\Http\Controllers\EmployeesController@store');

//UPDATE EMPLOYEE
Route::put('updateEmployee/{id}', 'App\Http\Controllers\EmployeesController@update');

//DELETE
Route::delete('deleteEmployee/{id}', 'App\Http\Controllers\EmployeesController@destroy');
