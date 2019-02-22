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

Auth::routes();

Route::get('/', 'User@login');
Route::get('login', 'User@login');
Route::get('/home_user', 'User@index');
//Route::post('login', [ 'as' => 'login', 'uses' => 'User@login']);
 
Route::post('/loginPost', 'User@loginPost');
Route::get('/pdf', 'User@downloadPDF');


Route::resource('teacher', 'TeacherController');
Route::resource('classroom', 'ClassroomController');
Route::resource('student', 'StudentController');



Route::post('/teacher/addclass', 'TeacherController@addclass');
Route::post('/student/addclass', 'StudentController@addclass');
