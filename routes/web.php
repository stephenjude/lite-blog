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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/articles', 'HomeController@index')->name('articles');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/articles/{slug}', 'HomeController@findPostBySlug')->name('blog.post');
Route::get('/fresh', 'HomeController@updateJsonScript')->name('index.json');
