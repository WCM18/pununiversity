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


Route::get('/', function () {
    return view('welcome');
});
*/
use Illuminate\Support\Facades\Route;
Route::get('n/{id}',"gradelistController@index");
Route::get('m/{id}',"studentlistController@index");
Route::get('t/{id}',"classnewController@index");
Route::get('/',"classController@index");
Route::get('/edit/{id}',"classController@edit");
Route::get('/destroy/{id}',"classController@destroy");

Route::get('/show/{id}',"classController@index");
Route::get('/create',"classController@create");
Route::post('/store',"classController@store");
Route::post('/update/{id}',"classController@update");
Route::patch('/restore/{id}','NotesController@restore');




Route::get('p/',"courseController@index");
Route::get('p/edit/{id}',"courseController@edit");
Route::get('p/destroy/{id}',"courseController@destroy");
Route::get('p/show/{id}',"courseController@index");
Route::get('p/create',"courseController@create");
Route::post('p/store',"courseController@store");
Route::post('p/update/{id}',"courseController@update");
Route::patch('p/restore/{id}','NotesController@restore');


Route::get('b/',"StudentController@index");
Route::get('b/edit/{id}',"StudentController@edit");
Route::get('b/destroy/{id}',"StudentController@destroy");
Route::get('b/show/{id}',"StudentControllerr@index");
Route::get('b/create',"StudentController@create");
Route::post('b/store',"StudentController@store");
Route::post('b/update/{id}',"StudentController@update");
Route::patch('b/restore/{id}','NotesController@restore');

Route::get('c/',"gradeController@index");
Route::get('c/edit/{id}',"gradeController@edit");
Route::get('c/destroy/{id}',"gradeController@destroy");
Route::get('c/show/{id}',"gradeControllerr@index");
Route::get('c/create',"gradeController@create");
Route::post('c/store',"gradeController@store");
Route::post('c/update/{id}',"gradeController@update");
Route::patch('c/restore/{id}','NotesController@restore');
























