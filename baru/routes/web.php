<?php

use Illuminate\Support\Facades\Route;


// Route::view('home');
//     $appName = "Laravel 8";
//     Route::view('/','home', ['appName'=> $appName]);

Route::get('profile', function () {
    // $name = "Bagus";
    return view('profile'
    // , [
    //     'name'=> $name
    );
});

Route ::get('/', function () {
    return view('home');
});

// Route ::get('/', function () {
//      dd(asset('css/app.css'));
// });

Route::view('contact','contact');

// Route::view('posts/First-post', 'posts.show');

Route::view('about','about');

Route::view('blog','blog');