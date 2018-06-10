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


Route::get('/', 'HomeController@home');

Route::get('/login', 'LoginController@login');

Route::get('/studentDashboard', 'StudentController@dashboard');


Route::get('/basic', 'HomeController@basic');


// Student Routes

Route::get('/attendance', 'StudentController@attendance');
Route::get('/academic', 'StudentController@academic');
Route::get('/academic/{id}', 'StudentController@academic_details');

Route::get('/announcement', 'StudentController@announcement');
Route::get('/give_feedback', 'StudentController@feedback');


// End - Student Routes


// Teacher Routes
Route::get('/add_attendance', 'TeacherController@add_attendance');
Route::get('/edit_attendance', 'TeacherController@edit_attendance');

Route::get('/add_evaluation', 'TeacherController@add_evaluation');
Route::get('/edit_evaluation', 'TeacherController@edit_evaluation');

Route::get('/make_announcement', 'TeacherController@make_announcement');
Route::get('/edit_announcement', 'TeacherController@edit_announcement');
Route::get('/edit_announcement/{id}', 'TeacherController@edit_announcement_view');

// To Do -- Teacher
Route::get('/feedback', 'TeacherController@feedback');
// End - Teacher Routes


// Admin Routes
Route::get('/assign_teacher', 'AdminController@assign_teacher_view');
Route::post('/assign_teacher', 'AdminController@assign_teacher')->name('AssignTeacher');

Route::get('/assign_subject', 'AdminController@assign_subject_view');

Route::post('/assign_subject', 'AdminController@assign_subject');




// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
