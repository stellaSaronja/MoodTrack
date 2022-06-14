<?php

use Illuminate\Support\Facades\Route;

/**
 * Auth Routes
 */
Route::get('/signup', 'AuthController@signup')->name('signup');
Route::post('/signup', 'AuthController@postSignup')->name('postSignup');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postLogin')->name('postLogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

/**
 * Home and Entry Routes
 */
Route::middleware('auth')->group(function () {
	Route::get('/', 'HomeController@index')->name('home');
	// Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/entry', 'EntryController@index')->name('entry.index');
	Route::post('/entry', 'EntryController@postEntry')->name('entry.postEntry');
	Route::get('/calendar', 'CalendarController@index')->name('calendar');
});
