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

Route::redirect('/', 'home');
Route::resource('/home', 'PageController');
Route::get('contact', 'PageController@contact')->name('contact');

Route::resource('administration', 'AdministrationController')->middleware('auth');
Route::resource('genders', 'GenderController')->middleware('auth');
Route::resource('countries', 'CountryController')->middleware('auth');
Route::resource('directors', 'DirectorController')->middleware('auth');
Route::resource('movies', 'MovieController')->middleware('auth');

Auth::routes();


