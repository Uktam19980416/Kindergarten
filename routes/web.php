<?php

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

Route::get('/', 'HomeController@indexs')->name('index');
Route::post('/stores', 'HomeController@stores')->name('stores');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/teacher', 'HomeController@teacher')->name('teacher');
Route::get('/courses', 'HomeController@courses')->name('courses');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@indexs')->name('home');
// Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');


Auth::routes(['verify' => true]);

Route::get('/home', 'KinderController@index')->middleware('verified');

Route::get('/kinders/index', 'KinderController@index')->name('kinders.index');
Route::post('/kinders/store', 'KinderController@store')->name('kinders.store');
Route::get('/kinders/create', 'KinderController@create')->name('kinders.create');
Route::get('/kinders/show/{id}', 'KinderController@show')->name('kinders.show');
Route::get('/kinders/edit/{id}', 'KinderController@edit')->name('kinders.edit');
Route::post('/kinders/update/{id}', 'KinderController@update')->name('kinders.update');
Route::delete('/kinders/destroy/{id}', 'KinderController@destroy')->name('kinders.destroy');

Route::get('/kinderNews/index', 'KinderNewsController@index')->name('kinderNews.index');
Route::post('/kinderNews/store', 'KinderNewsController@store')->name('kinderNews.store');
Route::get('/kinderNews/create', 'KinderNewsController@create')->name('kinderNews.create');
Route::get('/kinderNews/show/{id}', 'KinderNewsController@show')->name('kinderNews.show');
Route::get('/kinderNews/edit/{id}', 'KinderNewsController@edit')->name('kinderNews.edit');
Route::put('/kinderNews/update/{id}', 'KinderNewsController@update')->name('kinderNews.update');
Route::delete('/kinderNews/destroy/{id}', 'KinderNewsController@destroy')->name('kinderNews.destroy');

Route::get('/kinderNews/latestNews/{id}', 'HomeController@section')->name('product.section');

Route::get('/users/index', 'UserController@index')->name('users.index');
Route::post('/users/store', 'UserController@store')->name('users.store');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::get('/users/show/{id}', 'UserController@show')->name('users.show');
Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
Route::post('/users/update/{id}', 'UserController@update')->name('users.update');
Route::delete('/users/destroy/{id}', 'UserController@destroy')->name('users.destroy');

Route::get('/courses/index', 'CoursesController@index')->name('courses.index');
Route::post('/courses/store', 'CoursesController@store')->name('courses.store');
Route::get('/courses/create', 'CoursesController@create')->name('courses.create');
Route::get('/courses/show/{id}', 'CoursesController@show')->name('courses.show');
Route::get('/courses/edit/{id}', 'CoursesController@edit')->name('courses.edit');
Route::put('/courses/update/{id}', 'CoursesController@update')->name('courses.update');
Route::delete('/courses/destroy/{id}', 'CoursesController@destroy')->name('courses.destroy');

Route::get('/kinderNews/coursespart/{id}', 'HomeController@courses')->name('courses.coursespart');

Route::get('/teachers/index', 'TeachersController@index')->name('teachers.index');
Route::post('/teachers/store', 'TeachersController@store')->name('teachers.store');
Route::get('/teachers/create', 'TeachersController@create')->name('teachers.create');
Route::get('/teachers/show/{id}', 'TeachersController@show')->name('teachers.show');
Route::get('/teachers/edit/{id}', 'TeachersController@edit')->name('teachers.edit');
Route::put('/teachers/update/{id}', 'TeachersController@update')->name('teachers.update');
Route::delete('/teachers/destroy/{id}', 'TeachersController@destroy')->name('teachers.destroy');

Route::get('/parents/index', 'ParentsController@index')->name('parents.index');
Route::post('/parents/store', 'ParentsController@store')->name('parents.store');
Route::get('/parents/create', 'ParentsController@create')->name('parents.create');
Route::get('/parents/show/{id}', 'ParentsController@show')->name('parents.show');
Route::get('/parents/edit/{id}', 'ParentsController@edit')->name('parents.edit');
Route::put('/parents/update/{id}', 'ParentsController@update')->name('parents.update');
Route::delete('/parents/destroy/{id}', 'ParentsController@destroy')->name('parents.destroy');