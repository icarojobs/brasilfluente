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



Route::resource('user', 'UserController');
Route::resource('city', 'CityController');
Route::resource('state', 'StateController');
Route::resource('module', 'ModuleController');
Route::resource('lesson', 'LessonController');
Route::resource('modulelesson', 'ModuleLessonController');
Route::resource('type', 'TypeController');
Route::resource('lessonstatistic', 'LessonStatisticController');
Route::resource('modulestatistic', 'ModuleStatisticController');
Route::resource('vocabularystatistics', 'VocabularyStatisticsController');