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

// トップページview
Route::get('/', "PagesController@index");

// 新規登録画面view
Route::get('/signup', "PagesController@signup");

// 検索機能
Route::get('/search', 'PagesController@searchLivehouses');

// 検索結果画面view
Route::get('/result', "PagesController@result");
Route::post('/result', "PagesController@result");

// ライブハウス詳細ページview
Route::get('/result/{id}', "PagesController@show");

// ライブハウス新規登録機能
Route::post('/signup', "PagesController@storeLivehouse");

// ユーザー評価新規登録機能
Route::post('/result/{id}/evaluate', "PagesController@storeEvaluation");

// メッセージ送信画面view
Route::get('/result/{id}/sendMessage', "ContactController@sendMessage");

// メッセージ送信内容確認ページview
Route::get('/result/{id}/sendMessage/confirm', 'ContactController@confirm');
Route::post('/result/{id}/sendMessage/confirm', 'ContactController@confirm');

// メッセージ送信完了画面view
Route::get('/result/{id}/sendMessage/complete', 'ContactController@complete');
Route::post('/result/{id}/sendMessage/complete', 'ContactController@complete');

// ユーザー評価画面view
Route::get('/result/{id}/evaluate', "PagesController@evaluate");

// Basic認証
// Route::group(['middleware' => 'auth.very_basic'], function() {
//   Route::get('/signup', function () {
//     return view('pages.signup');
//   });
// });

// Route::group(['middleware' => 'auth.very_basic'], function() {
//     Route::get('/signup', ['as' => 'signup', 'uses' => 'PagesController@signup']);
//     Route::get('/page', ['as' => 'page', 'uses' => 'StartController@page']);
// });

// Route::get('/signup', [
//     'as' => 'signup',
//     'uses' => 'PagesController@signup',
//     'middleware' => 'auth.very_basic'
// ]);
