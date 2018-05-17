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

Route::get('dashboard', 'admin\adminController@index');
Route::get('asd', 'admin\adminController@testcookie');

Route::get('sendMessage', array('uses' => 'front\FrontController@sendMessage'));
Route::get('isTyping', array('uses' => 'front\FrontController@isTyping'));
Route::get('notTyping', array('uses' => 'front\FrontController@notTyping'));
Route::get('retrieveChatMessages', array('uses' => 'front\FrontController@retrieveChatMessages'));
Route::get('retrieveTypingStatus', array('uses' => 'front\FrontController@retrieveTypingStatus'));
Route::get('setupCookie', 'front\FrontController@setupCookie');
Auth::routes();

Route::get('home', 'Front\FrontController@index')->name('home');
