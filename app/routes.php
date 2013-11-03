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

//Route::get('calendar/{year}-{month}', function($year, $month)
//{
//    $contr = new CalendarController;
//    return $contr->Index($year, $month);
//});

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