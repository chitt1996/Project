<?php

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
Route::get('/', 'Client\HomeController@index');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('getLogin');

Auth::routes();

Route::get('calendar', 'Client\CalendarController@index')->name('getCalendar');
Route::post('calendar/create','Client\CalendarController@store')->name('postCalendar');
// Route::post('calendar/update','CalendarController@update');
// Route::post('calendar/delete','CalendarController@destroy');
