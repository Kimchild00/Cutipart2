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
// Route::resource('department', 'DepartmentsController');


Route::group(['middleware' => 'auth:web'], function(){
    // Route::resource('admin', 'AdminController');
    Route::prefix('admin')->group(function () {
        Route::get('/', 'AdminController@index');
        Route::resource('/department', 'DepartmentsController');
        Route::resource('/mail', 'MailController');
        Route::get('/user', 'AdminController@userrr');
        Route::post('/user', 'AdminController@stor');

    });
});