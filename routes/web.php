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

Route::get('/', function () {
	$title ="Link Finder";
    return view('front.index', compact('title'));
});

Route::get('/report', 'ItemController@reportFoundItem');
Route::get('/reports', 'ItemController@showAllReports');
Route::get('/report/{id}', 'ItemController@showReport');

Route::get('/admin/register', 'AdminController@showRegister');
Route::post('/admin/register', 'AdminController@register');
Route::get('/admin', 'AdminController@showLogin');

Route::get('/login', 'UserController@showLogin');
Route::post('/login', 'UserController@login');
Route::get('/register', 'UserController@showRegister');
Route::post('/register', 'UserController@register');
