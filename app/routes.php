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

Route::get('admin/schedule', array('uses' => 'ScheduleController@Admin'));

Route::get('admin/schedule/edit/{danceClass}', array('as' => 'getEdit', 'uses' => 'ScheduleController@Edit'));

Route::post('admin/schedule/edit/{danceClass}', array('uses' => 'ScheduleController@postEdit'));

Route::get('admin/schedule/create', array('uses' => 'ScheduleController@Create'));

Route::post('admin/schedule/create', array('uses' => 'ScheduleController@postCreate'));

Route::get('admin/schedule/delete/{danceClass}', array('uses' => 'ScheduleController@Delete'));

/**
 * calendar routes
 */
Route::get('calendar', 'CalendarController@Index');

Route::get('calendar/{year}-{month}', array('as' => 'calendarMonth', 'uses' => 'CalendarController@SpecificMonth'));

/**
 * event routes
 */
Route::model('danceEvent', 'DanceEvent');
Route::model('eventPhoto', 'Image');

Route::post('event/reminder', 'EventController@SetupReminder');

Route::get('admin/event/add', array('as' => 'addEvent', 'uses' => 'EventController@AddEvent'));

Route::post('admin/event/add', 'EventController@PostAddEvent');

Route::get('event/{danceEvent}', array('as' => 'displayEvent', 'uses' => 'EventController@Index'));

Route::get('admin/event/{danceEvent}/images', array('as' => 'eventImagesCRUD', 'uses' => 'EventImagesController@Index'));

Route::post('admin/event/{danceEvent}/addImage', array('as' => 'postAddImageToEvent', 'uses' => 'EventImagesController@PostAddImage'));

Route::get('admin/event/{danceEvent}/removePhoto/{eventPhoto}', array('as' => 'removeImageFromEvent', 'uses' => 'EventImagesController@RemoveImage'));

/**
 * news routes
 */
Route::model('news', 'News');

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@Index'));

Route::get('news', 'HomeController@Index');

Route::get('admin/news/add', 'HomeController@AddNews');

Route::post('admin/news/add', 'HomeController@PostAddNews');

Route::get('news/{news}', 'HomeController@News');

/**
 * instructors
 */
Route::model('instructor', 'Instructor');

Route::get('instructors', array('as' => 'showAllInstructors', 'uses' => 'InstructorController@Index'));

Route::get('admin/instructors/create', array('as' => 'instructorCreate', 'uses' => 'InstructorController@Create'));

Route::post('admin/instructors/create', array('as' => 'instructorPostCreate', 'uses' => 'InstructorController@postCreate'));

Route::get('instructors/{instructor}', array('as' => 'showInstructor', 'uses' => 'InstructorController@Instructor'));

Route::get('admin/instructors/{instructor}/delete', 'InstructorController@Delete');

Route::get('admin/instructors/{instructor}/edit', array('as' => 'instructorUpdate', 'uses' => 'InstructorController@Update'));

Route::post('admin/instructors/{instructor}/edit', array('as' => 'instructorPostUpdate', 'uses' => 'InstructorController@postUpdate'));

/**
 * dance styles
 */
Route::bind('danceStyle', function($value, $route)
{
    if ($value == 0)
    {
        return new DanceStyle;
    }
    
    return DanceStyle::find($value);
});

Route::get('styles', 'DanceStyleController@Index');

Route::get('admin/styles/create', 'DanceStyleController@Create');

Route::get('admin/styles/{danceStyle}/update', 'DanceStyleController@Update');

Route::get('styles/{danceStyle}', array('as' => 'danceStyle', 'uses' => 'DanceStyleController@DanceStyle'));

Route::get('admin/styles/{danceStyle}/delete', 'DanceStyleController@Delete');

Route::post('admin/styles/persist/{danceStyle}', 'DanceStyleController@Persist');

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

Route::get('admin/prices', array('as' => 'managePrices', 'uses' => 'StylePricesController@Manage'));

Route::post('admin/prices/create', array('as' => 'savePrice', 'uses' => 'StylePricesController@PostCreate'));

Route::post('admin/prices/edit/{danceStyle}', array('as' => 'updatePrice', 'uses' => 'StylePricesController@PostEdit'));

/**
 * static
 */
Route::get('contact', array('as' => 'contact', 'uses' => 'ContactController@Index'));

Route::when('admin/*', 'admin');

/**
 * users
 */
Route::bind('vm', function($value, $route)
{
    $binder = new Binder();
    
    $vm = $binder->Bind($value, Input::all());
    
    if ($vm instanceof ViewModel)
    {
        return $vm;
    }
    
    //redirect to error or sth
});

Route::model('user', 'User');

Route::post('signIn-{vm}', array('as' => 'postSignIn', 'uses' => 'UserController@PostSignIn'));
    
Route::get('signUp', array('as' => 'signUp', 'uses' => 'UserController@SignUp'));

Route::post('signUp-{vm}', array('as' => 'postSignUp', 'uses' => 'UserController@PostSignUp'));

Route::get('admin/usersUD', array('as' => 'usersUD', 'uses' => 'UserController@UsersUD'));

Route::get('admin/deleteUser/{user}', array('as' => 'deleteUser', 'uses' => 'UserController@DeleteUser'));

Route::post("admin/updateUser/{user}", array('as' => 'postUpdateUser', 'uses' => 'UserController@PostUpdateUser'));

Route::get('signOut', array('as' => 'signOut', function(){
    Auth::logout();
    return Redirect::to(URL::previous());
}));