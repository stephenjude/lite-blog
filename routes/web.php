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

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('about', [BlogController::class, 'about'])->name('about');
Route::get('articles', [BlogController::class, 'index'])->name('articles');
Route::get('articles/{slug}', [BlogController::class, 'findPostBySlug'])->name('blog.post');
Route::get('draft/{postSlug}/preview', [BlogController::class, 'preview'])->name('preview');
