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
Route::get('/resource-center', 'ResourceCenterController@index');
Route::get('/my-profile', 'UserController@index');
Route::get('/system-reports', 'ReportingController@index');
Route::get('/system-admin', 'AdminController@index');
Route::get('/person-mentee', 'PersonController@mentees');
Route::get('/person-mentor', 'PersonController@mentors');
Route::get('/system-setup', 'SystemSetUpController@setUp');
Route::get('/session/{id}', 'MentorshipSessionController@show');
Route::get('/mentorship-session', 'MentorshipSessionController@index');
Route::post('/session-create', 'MentorshipSessionController@store');
Route::get('/indicator-list', 'MentorshipSessionIndicatorController@index');
/*Route::get('/indicator-form', 'MentorshipSessionIndicatorController@create');
Route::post('/indicator-create', 'MentorshipSessionIndicatorController@store');*/
Route::get('/person-home', 'PersonController@index');
Route::get('/person-create', 'PersonController@create');
Route::post('/person-add', 'PersonController@store');
Route::get('/session-tool/{tool}','MentorshipSessionController@create');
Route::get('/',['as'=>'home','uses'=>'HomeController@index']);
Route::get('/dash-board',['as'=>'dash-board','uses'=>"DashBoardController@index"]);
Route::controller('/','Auth\AuthController');

