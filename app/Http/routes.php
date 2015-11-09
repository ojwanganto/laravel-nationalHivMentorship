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
Route::get('/session/{id}', 'MentorshipSessionController@show');
Route::get('/session-list', 'MentorshipSessionController@index');
Route::get('/indicator-setup', 'MentorshipSessionIndicatorController@setUpOriginalIndicators');
Route::post('/session-create', 'MentorshipSessionController@store');
Route::get('/indicator-list', 'MentorshipSessionIndicatorController@index');
Route::get('/indicator-form', 'MentorshipSessionIndicatorController@create');
Route::post('/indicator-create', 'MentorshipSessionIndicatorController@store');
Route::get('/person-list', 'PersonController@index');
Route::get('/person-create', 'PersonController@create');
Route::post('/person-add', 'PersonController@store');
Route::get('/clinical-tool','MentorshipSessionController@create');
Route::get('/',['as'=>'home','uses'=>'HomeController@index']);
Route::get('/dash-board',['as'=>'dash-board','uses'=>"DashBoardController@index"]);
Route::controller('/','Auth\AuthController');

