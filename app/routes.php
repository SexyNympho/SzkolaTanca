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

Route::get('schedule/admin', array('before' => 'auth.basic', 'uses' => 'ScheduleController@Admin'));

Route::get('schedule/admin/edit/{danceClass}', array('as' => 'getEdit', 'uses' => 'ScheduleController@Edit'));

Route::post('schedule/admin/edit/{danceClass}', array('uses' => 'ScheduleController@postEdit'));

Route::get('schedule/admin/create', array('uses' => 'ScheduleController@Create'));

Route::post('schedule/admin/create', array('uses' => 'ScheduleController@postCreate'));

Route::get('schedule/admin/delete/{danceClass}', array('uses' => 'ScheduleController@Delete'));

/**
 * calendar routes
 */
Route::get('calendar', 'CalendarController@Index');

Route::get('calendar/{year}-{month}', 'CalendarController@SpecificMonth');

/**
 * event routes
 */
Route::model('danceEvent', 'DanceEvent');
Route::model('eventPhoto', 'Image');

Route::post('event/reminder', 'EventController@SetupReminder');

Route::get('event/add', array('as' => 'addEvent', 'uses' => 'EventController@AddEvent'));

Route::post('event/add', 'EventController@PostAddEvent');

Route::get('event/{danceEvent}', array('as' => 'displayEvent', 'uses' => 'EventController@Index'));

Route::get('event/{danceEvent}/images', array('as' => 'eventImagesCRUD', 'uses' => 'EventImagesController@Index'));

Route::post('event/{danceEvent}/addImage', array('as' => 'postAddImageToEvent', 'uses' => 'EventImagesController@PostAddImage'));

Route::get('event/{danceEvent}/removePhoto/{eventPhoto}', array('as' => 'removeImageFromEvent', 'uses' => 'EventImagesController@RemoveImage'));

/**
 * news routes
 */

Route::model('news', 'News');

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@Index'));

Route::get('news', 'HomeController@Index');

Route::get('news/add', 'HomeController@AddNews');

Route::post('news/add', 'HomeController@PostAddNews');

Route::get('news/{news}', 'HomeController@News');

/**
 * instructors
 */

Route::model('instructor', 'Instructor');

Route::get('instructors', array('as' => 'showAllInstructors', 'uses' => 'InstructorController@Index'));

Route::get('instructors/create', array('as' => 'instructorCreate', 'uses' => 'InstructorController@Create'));

Route::post('instructors/create', array('as' => 'instructorPostCreate', 'uses' => 'InstructorController@postCreate'));

Route::get('instructors/{instructor}', array('as' => 'showInstructor', 'uses' => 'InstructorController@Instructor'));

Route::get('instructors/{instructor}/delete', 'InstructorController@Delete');

Route::get('instructors/{instructor}/edit', array('as' => 'instructorUpdate', 'uses' => 'InstructorController@Update'));

Route::post('instructors/{instructor}/edit', array('as' => 'instructorPostUpdate', 'uses' => 'InstructorController@postUpdate'));

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

/**
 * login hack
 */

Route::get('login', array('before' => 'auth.basic', function(){
    return Redirect::action('HomeController@Index');
}));

Route::get('logout', function(){
    Auth::logout();
    return Redirect::action('HomeController@Index');
});

/**
 * thumb
 */

Route::model('image', 'Image');

Route::get('thumb/{image}/{width}x{height}', array('as' => 'thumbnail', 'uses' => 'ThumbController@Index'));

/**
 * gallery
 */

Route::get('gallery', array('as' => 'galleryMain', 'uses' => 'GalleryController@Index'));

Route::get('gallery/{danceStyle}', array('as' => 'danceStyleGallery', 'uses' => 'GalleryController@DanceStyle'));

Route::get('gallery/{danceStyle}/{danceEvent}', array('as' => 'eventGallery', 'uses' => 'GalleryController@Event'));

/**
 * prices
 */

Route::get('prices', array('as' => 'priceList', 'uses' => 'StylePricesController@Index'));

Route::get('prices/manage', array('before' => 'auth.basic', 'as' => 'managePrices', 'uses' => 'StylePricesController@Manage'));

Route::post('prices/manage/create', array('before' => 'auth.basic', 'as' => 'savePrice', 'uses' => 'StylePricesController@PostCreate'));

Route::post('prices/manage/edit/{danceStyle}', array('before' => 'auth.basic', 'as' => 'updatePrice', 'uses' => 'StylePricesController@PostEdit'));