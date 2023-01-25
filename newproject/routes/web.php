<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get ('/', function() {
    return view('home');
} );
Route::view ('profile', 'profile');
Route::view ('contact', 'contact');
Route::view ('about', 'about');
Route::view ('blog', 'blog');
Route::view ('posts/first-post', 'posts.show');