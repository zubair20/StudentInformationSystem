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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Routes for Student login
Route::get('/students/login', 'Auth\StudentLoginController@showLoginForm')->name('student.login');
Route::post('/students/login', 'Auth\StudentLoginController@login')->name('student.login.submit');


//Routes for Students
Route::resource('/students','StudentsController');

//Routes for Teacher Login
Route::get('/teachers/login', 'Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
Route::post('/teachers/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');

//Routes for Teachers
Route::resource('/teachers','TeachersController');

//Routes for sessions
Route::resource('/sessions','SessionsController');

//Routes for Departments
Route::resource('/departments','DepartmentsController');

//Routes for Semesters
Route::resource('/semesters','SemestersController');

//Routes for Marks Types
Route::resource('/markstypes','MarksTypesController');

//Routes for Courses
Route::resource('/courses','CoursesController');

