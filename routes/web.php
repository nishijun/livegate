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
Route::get('/', "PagesController@index");
Route::get('/signup', "PagesController@signup");
Route::get('/result', "PagesController@result");
Route::get('/search', "PagesController@search");
Route::get('/result/{id}', "PagesController@show");
Route::post('/signup', "PagesController@store");
Route::get('/result/{id}/sendMessage', "PagesController@sendMessage");
Route::get('/result/{id}/evaluate', "PagesController@evaluate");
