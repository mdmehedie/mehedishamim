<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home');
Route::view('post', 'post')->name('post');
Route::get('video', [VideoController::class, 'index'])->name('video');
Route::get('video/{slug}', [VideoController::class, 'specialVideo'])->name('specialVideo');

Route::view('about-me', 'about')->name('about');

Route::get("post/{slug}", [PostController::class, 'show'])->name('post.show');
Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/{slug}', [CategoryController::class, 'show'])->name('category.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
