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

Route::get('/', 'BlogController@index')->name('home');
Route::get('/articles', 'BlogController@index')->name('articles');
Route::get('/about', 'BlogController@about')->name('about');
Route::get('/articles/{slug}', 'BlogController@findPostBySlug')->name('blog.post');
Route::get('/fresh', 'BlogController@updateIndexedArticles')->name('index.json');
