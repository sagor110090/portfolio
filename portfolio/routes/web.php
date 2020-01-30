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


Route::group(['middleware' => 'auth','namespace' => 'Admin','prefix' => 'admin'], function () {
    Route::resource('categories', 'CategoriesController');
    Route::resource('projects', 'ProjectsController');
    Route::resource('pages/home', 'HomeController');
    Route::resource('pages/skill', 'SkillController');
    Route::resource('pages/home', 'HomeController');
    Route::resource('pages/about', 'AboutController');
    Route::resource('pages/contact', 'ContactController');
});

