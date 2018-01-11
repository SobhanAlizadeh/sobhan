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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group(function (){
    Route::resource('projects','ProjectsController');
    Route::resource('comment','CommentsController');
    Route::resource('roles','RolesController');
    Route::resource('companies','CompaniesController');
    Route::resource('comments','CommentsController');
    Route::resource('tasks','TasksController');
    Route::resource('users','UsersController');
});

