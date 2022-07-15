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
Route::get('/', 'HomeController@index')->name('index');
Route::middleware('auth')->group(function () {
	Route::get('/home', 'HomeController@home')->name('home');
	Route::get('/entry', 'EntryController@index')->name('entry.index');
	Route::post('/entry', 'EntryController@postEntry')->name('entry.postEntry');
	Route::get('/entry/{id}', 'EntryController@viewEntry')->name('entry.viewEntry');
	Route::get('/calendar', 'CalendarController@index')->name('calendar');
});

/**
 * Legal Routes
 */
Route::get('/terms', 'LegalController@terms')->name('terms');
Route::get('/privacy', 'LegalController@privacy')->name('privacy');
