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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home');
Route::get('/createUsers', 'HomeController@create')->name('userRegister');


Route::group(['prefix' => '/AddJob'], function(){
    Route::get('/manage', 'JobPostController@index')->name('manageContact');
    // Show Create Page and Store after Submit
    Route::get('/create', 'JobPostController@create')->name('createContact');
    Route::post('/create', 'JobPostController@store')->name('storeContact');
    // Show Edit Page and Update after Submit
    Route::get('/edit/{id}', 'JobPostController@edit')->name('editContact');
    Route::post('/edit/{id}', 'JobPostController@update')->name('updateContact');
    // Delete AddImage From Manage
    Route::post('/delete/{id}', 'JobPostController@destroy')->name('deleteContact');
});