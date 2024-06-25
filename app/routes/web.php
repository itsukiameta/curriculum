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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/','HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@main')->name('main');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('admin-login');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin-register');

Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');

Route::get('password/admin/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('password/admin/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('password/admin/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('password/admin/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');

Route::get('/create', 'MessagesController@create')->name('create');
Route::post('/create', 'MessagesController@createForm')->name('create-form');
Route::get('/search', 'MessagesController@search')->name('search');
Route::post('/search', 'MessagesController@searchForm')->name('search-form');

Route::post('/like','LikeController@like')->name('messages.like');

Route::get('/user_search', 'OwnerController@usersearch')->name('user-search');
Route::post('/user_search', 'OwnerController@usersearchForm')->name('user-search-form');
Route::get('/message_search', 'OwnerController@messagesearch')->name('message-search');
Route::post('/message_search', 'OwnerController@messagesearchForm')->name('message-search-form');

Route::get('/user_delete/{id}','OwnerController@deleteUserForm')->name('user-delete');
Route::post('/user_delete/{id}','OwnerController@userDelete');
Route::get('/message_delete/{id}','OwnerController@deleteMessageForm')->name('message-delete');
Route::post('/message_delete/{id}','OwnerController@messageDelete');
