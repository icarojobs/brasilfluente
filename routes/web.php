<?php

// Site Routes
Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'SiteController@index');
});


// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'namespace' => 'Admin'], function () {
    CRUD::resource('user', 'UserController');
    CRUD::resource('city', 'CityController');
    CRUD::resource('state', 'StateController');
    CRUD::resource('module', 'ModuleController');
    CRUD::resource('lesson', 'LessonController');
    CRUD::resource('modulelesson', 'ModuleLessonController');
    CRUD::resource('type', 'TypeController');
    CRUD::resource('lessonstatistic', 'LessonStatisticController');
    CRUD::resource('modulestatistic', 'ModuleStatisticController');
    CRUD::resource('vocabularystatistics', 'VocabularyStatisticsController');
});

