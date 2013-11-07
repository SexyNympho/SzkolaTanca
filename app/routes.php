<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
 * Schedule routes
 */

Route::model('danceClass', 'DanceClass');

Route::get('schedule', 'ScheduleController@Index');

Route::get('schedule/admin', array('uses' => 'ScheduleController@Admin'));

Route::get('schedule/admin/edit/{danceClass}', array('as' => 'getEdit', 'uses' => 'ScheduleController@Edit'));

Route::post('schedule/admin/edit/{danceClass}', array('uses' => 'ScheduleController@postEdit'));

Route::get('schedule/admin/create', array('uses' => 'ScheduleController@Create'));

Route::post('schedule/admin/create', array('uses' => 'ScheduleController@postCreate'));

Route::get('schedule/admin/delete/{danceClass}', array('uses' => 'ScheduleController@Delete'));

/**
 * calendar routes
 */
Route::model('danceEvent', 'DanceEvent');

Route::get('calendar', 'CalendarController@Index');

Route::get('calendar/{year}-{month}', 'CalendarController@SpecificMonth');

Route::get('calendar/event/{danceEvent}', 'CalendarController@Event');

Route::post('calendar/reminder', 'CalendarController@SetupReminder');

Route::get('calendar/add', 'CalendarController@AddEvent');

Route::post('calendar/add', 'CalendarController@PostAddEvent');

/**
 * news routes
 */

Route::model('news', 'News');

Route::get('/', 'HomeController@Index');

Route::get('news', 'HomeController@Index');

Route::get('news/add', 'HomeController@AddNews');

Route::post('news/add', 'HomeController@PostAddNews');

Route::get('news/{news}', 'HomeController@News');

/**
 * instructors
 */

Route::model('instructor', 'Instructor');

Route::get('/instructors', 'InstructorController@Index');

Route::get('/instructors/create', 'InstructorController@Create');

Route::post('/instructors/create', 'InstructorController@postCreate');

Route::get('/instructors/{instructor}', 'InstructorController@Instructor');

Route::get('/instructors/{instructor}/delete', 'InstructorController@Delete');

Route::get('/instructors/{instructor}/edit', 'InstructorController@Update');

Route::post('/instructors/{instructor}/edit', 'InstructorController@postUpdate');

/**
 * dance styles
 */

Route::model('danceStyle', 'DanceStyle');

Route::get('styles', 'DanceStyleController@Index');

Route::get('styles/create', 'DanceStyleController@Create');

Route::get('styles/{danceStyle}/update', 'DanceStyleController@Update');

Route::get('styles/{danceStyle}/view', 'DanceStyleController@DanceStyle');

Route::get('styles/{danceStyle}/delete', 'DanceStyleController@Delete');

Route::post('styles/persist/{danceStyleId}', 'DanceStyleController@Persist')
    ->where('danceStyleId', '[0-9]+');