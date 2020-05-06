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
    return view('welcome');
});

// ユーザー
Route::get('/home', function () {
    return view('home');
});

Route::get('/auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/auth/register', 'Auth\RegisterController@register');

Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login', 'Auth\LoginController@login');

Route::get('/auth/logout', 'Auth\LoginController@logout');

// 管理者
Route::get('/admin/home', function () {
    return view('admin/home');
});

Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm');
Route::post('admin/register', 'Admin\RegisterController@register');

Route::get('/admin/login', 'Admin\LoginController@showLoginForm');
Route::post('/admin/login', 'Admin\LoginController@login');

Route::get('/admin/logout', 'Admin\LoginController@logout');

//企業
Route::get('/admin/companies', 'Admin\CompaniesController@companies');

