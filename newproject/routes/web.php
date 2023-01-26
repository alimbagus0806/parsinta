<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get ('/', function() {
    return view('home');
} );
Route::get('profile', function (Request $request) {

    // Route::get('profile/{$username}', function ($username) { 
    // $name = $_GET['name'];
    $name = $request -> name;
    // return "My name is {$name}";
        return view ('profile', ['name' => $name]);

});
Route::view ('contact', 'contact');
Route::view ('about', 'about');
Route::view ('blog', 'blog');
Route::view ('posts/first-post', 'posts.show');

Route::get ('tasks', [TaskController::class, 'index']);
