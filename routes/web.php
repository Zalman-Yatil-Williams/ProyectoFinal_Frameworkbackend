<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','App\Http\Controllers\StudentController@index') ;
Route::get('/edit/{id}','App\Http\Controllers\StudentController@edit') ;
Route::get('/show/{id}','App\Http\Controllers\StudentController@show') ;
Route::get('/create','App\Http\Controllers\StudentController@create') ;
Route::post('/store','App\Http\Controllers\StudentController@store') ;
Route::post('/update/{id}', "App\Http\Controllers\StudentController@update") ;
Route::get('/delete/{id}','App\Http\Controllers\StudentController@destroy');