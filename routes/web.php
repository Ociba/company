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
Route::get('/jajacompany-dashboard', function () { return view('admin.template');})->name('Dashboard');
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
Route::get('/edit-news/{id}','NewsController@editNews')->name('Edit News');
Route::Post('/update-news/{id}','NewsController@updateNews');
Route::post('/create-news','NewsController@validateNews');
Route::get('/delete-news/{id}','NewsController@deleteNews');
Route::get('/display-events-in-dashboard','EventsController@getEventsOnDashbord')->name('Events');
Route::get('/get-events-form','EventsController@getEventsForm')->name('Events Form');
Route::get('/create-event','EventsController@validateEvent');
Route::get('/delete-event/{id}','EventsController@deleteEvents');
Route::get('/edit-event/{id}','EventsController@editEvents')->name('Edit Event');
Route::Post('/update-event/{id}','EventsController@updateEvents');
Route::get('/create-comment','CommentController@validateComment');
Route::get('/approve-comment','CommentController@approveComment')->name('Approve Comment');
Route::get('/reply/{id}','CommentController@replyForm')->name('Reply Comment');
Route::get('/reply-comment/{id}','CommentController@replyComment');
Route::get('/approve/{id}','CommentController@deleteComment');
Route::get('/edit-payment/{id}','PaymentController@editPayment')->name('Edit Payment');
Route::get('/get-invoice','PaymentController@getPayment')->name('Payment');
Route::get('/get-payment-information/{id}','PaymentController@paymentDetails')->name('Payment Details');
Route::get('/make-payments','PaymentController@getPaymentForm')->name('Payment Form');
Route::get('/pay','PaymentController@validatePayment');
Route::get('/delete-payment/{id}','PaymentController@deletePayment');
Route::get('/save-edited-payment/{id}','PaymentController@updatePayment');
Route::get('/get-pricing','PaymentController@getPrice')->name('Pricing');
Route::get('/get-expenditure-form','ExpenditureController@expenditureForm')->name('Expenditure Form');
Route::get('/create-expenditure','ExpenditureController@validateExpenditure');
Route::get('/get-expenditure-details/{id}','ExpenditureController@expenditureDetails')->name('Expenditure Information');
Route::get('/edit-expenditure-form/{id}','ExpenditureController@editExpenditure')->name('Edit Expenditure Form');
Route::get('/update-expenditure/{id}','ExpenditureController@updatePayment');
Route::get('/delete-expenditure/{id}','ExpenditureController@deleteExpenditure');
Route::get('/get-expenditure','ExpenditureController@getExpenditure')->name('Expenditure');