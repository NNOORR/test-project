<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('master-child');
});


Route::get('/homeTeacher', function () {
    return view('HomeTeacher');
});
Route::get('/addLesson','teacherController@addLesson');
Route::post('storeLesson','teacherController@storeLesson');
Route::get('/showCourses', function () {
    $str = "course" ;
    return view('showCourses' , compact('str'));
});
Route::get('/ShowLessons', 'teacherController@showLessons');

Route::get('/makePass','teacherController@makePass');
Route::get('/item','siteController@callItemPage');
Route::get('/showList','siteController@callListPage');
Route::get('/dropTable','siteController@dropTable');

//NB 12-11-2016
Route::get('item','StudentController@showCourse');



