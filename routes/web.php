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

// Index
Route::get('/', 'MainController@index');

// Person - Entity Profile
Route::get('/profile', 'UserController@profile')->middleware('auth');
Route::get('/profile/{id}', 'UserController@getProfile');

// Profile Edit
Route::get('/profile_edit', 'UserController@edit')->middleware('auth')->middleware('verified');
Route::post('/user_edit', 'UserController@user_update')->middleware('auth')->middleware('verified');
Route::post('/entity_edit', 'UserController@entity_update')->middleware('auth')->middleware('verified');

// Pet Profile
Route::get('/pet/{id}', 'PetController@profile');
Route::get('/pet_form', 'PetController@pet_form')->middleware('auth')->middleware('verified');
Route::post('/pet_create', 'PetController@pet_create')->middleware('auth')->middleware('verified');
Route::get('/pet_edit/{id}', 'PetController@edit')->middleware('auth')->middleware('verified');
Route::post('/pet_edit', 'PetController@pet_update')->middleware('auth')->middleware('verified');
Route::get('/pet_delete/{id}', 'PetController@pet_delete')->middleware('auth')->middleware('verified');
Route::post('/pet_pic_upload', 'PetController@pet_image_upload')->middleware('auth')->middleware('verified');
Route::get('/pet_pic_delete/{id}', 'PetController@pet_image_delete')->middleware('auth')->middleware('verified');
Route::get('/pet_pic_select/{id}/{picture}', 'PetController@pet_image_select')->middleware('auth')->middleware('verified');

// Auth
Auth::routes(['verify' => true]);
