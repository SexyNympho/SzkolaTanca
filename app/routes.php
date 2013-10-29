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

Route::model('danceClass', 'DanceClass');

Route::get('schedule', 'ScheduleController@Index');

Route::get('schedule/admin', array('uses' => 'ScheduleController@Admin'));

Route::get('schedule/admin/edit/{danceClass}', array('as' => 'getEdit', 'uses' => 'ScheduleController@Edit'));

Route::post('schedule/admin/edit/{danceClass}', array('uses' => 'ScheduleController@postEdit'));

Route::get('schedule/admin/create', array('uses' => 'ScheduleController@Create'));

Route::post('schedule/admin/create', array('uses' => 'ScheduleController@postCreate'));

Route::get('schedule/admin/delete/{danceClass}', array('uses' => 'ScheduleController@Delete'));

Route::get('/', function()
{
	return View::make('hello');
});