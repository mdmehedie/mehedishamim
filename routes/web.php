<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home');
Route::view('post', 'post')->name('post');
Route::view('video', 'video')->name('video');
Route::view('about-me', 'about')->name('about');

Route::get("post/{slug}", [PostController::class, 'show'])->name('post.show');
Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/{slug}', [CategoryController::class, 'show'])->name('category.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
