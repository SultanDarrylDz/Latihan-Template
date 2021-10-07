k<?php

use Illuminate\Support\Facades\Route;

Route::get('index', function(){
    return view('profile.index');
}) -> name('index');

Route::get('about', function(){
    return view('profile.about');
}) -> name('about');

Route::get('post', function(){
    return view('profile.post');
}) -> name('post');

Route::get('contact', function(){
    return view('profile.contact');
}) -> name('contact');


// Admin Route
Route::prefix('admin')->group (function(){
    Route::get('/', function(){
      return view('admin.index');
    });
});
