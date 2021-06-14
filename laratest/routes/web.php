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

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::middleware(['middleware' => ['session']], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/logout', 'LogoutController@index');
    Route::get('/users/list', 'UserController@index');
    // Details User Route
    Route::get('/user/details/{id}', 'UserController@details');
    Route::middleware(['middleware' => ['type']], function () {
    });
    // Edit User Route
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::post('user/edit/{id}', 'UserController@update');
    // Delete User Route
    Route::get('/user/delete/{id}', 'UserController@delete');
    // Create User Route
    Route::get('/user/create', 'UserController@create');
    Route::post('/user/create', 'UserController@insert');
});
