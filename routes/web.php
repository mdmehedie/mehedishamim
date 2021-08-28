<?php

use Illuminate\Support\Facades\Route;

Route::view('', 'home')->name('home');
Route::view('post', 'post')->name('post');
Route::view('video', 'video')->name('video');
Route::view('about-me', 'about')->name('about');
