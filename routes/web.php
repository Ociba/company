<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','FrontPagesController@homepage');
Route::get('/apply-now','ApplicationController@getApplicationForm');
Route::get('/company-dashboard', function () { return view('admin.template');})->name('Dashboard');
Route::get('/create-application','ApplicationController@validateApplication');
Route::get('/unread-application','ApplicationController@getApplicationNotRead')->name('Unread Applications');
Route::get('/change-not-read-to-read/{id}','ApplicationController@updateStatusToRead');
Route::get('/read-application','ApplicationController@getApplicationRead')->name('Read Application');
Route::get('/create-message','MessageController@validateMessage');
Route::get('/unread-message','MessageController@getNotReadMessages')->name('Unread Message');
Route::get('/read-message','MessageController@getReadMessages')->name('read Message');
Route::get('/change-unread-message-to-read/{id}','MessageController@updateMessageToRead');
Route::get('/get-form-to-add-news','NewsController@getNewsForm')->name('News Form');
Route::get('/display-news-in-dashboard','NewsController@getNewsOnDashbord')->name('News');
Route::post('/create-news','NewsController@validateNews');
Route::get('/delete-news/{id}','NewsController@deleteNews');
Route::get('/display-events-in-dashboard','EventsController@getEventsOnDashbord')->name('Events');
Route::get('/get-events-form','EventsController@getEventsForm')->name('Events Form');
Route::get('/create-event','EventsController@validateEvent');
Route::get('/delete-event/{id}','EventsController@deleteEvents');
