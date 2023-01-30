<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileInformationController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get ('/', function() {
    return view('home');
} );
// Route::resource('contact', ContactController::class);
// Route::get('/', HomeController::class);
Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);
Route::get('profile', [ProfileInformationController::class, '__invoke']);

// Route::get('profile', function (Request $request) {

//     // Route::get('profile/{$username}', function ($username) { 
//     // $name = $_GET['name'];
//     $name = $request -> name;
//     // return "My name is {$name}";
//         return view ('profile', ['name' => $name]);

// });
// Route::view ('contact', 'contact');
Route::view ('about', 'about');
// Route::view ('blog', 'blog');
// Route::view ('posts/first-post', 'posts.show');
Route::resource('tasks', TaskController::class);
// Route::get ('tasks', [TaskController::class, 'index']);
// Route::get ('tasks/create', [TaskController::class, 'create']);

// Route::post ('tasks', [TaskController::class, 'store']);

// Route::get ('tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put ('tasks/{id}', [TaskController::class, 'update']);
// Route::delete ('tasks/{id}', [TaskController::class, 'destroy']);

Route::get('users', [UsersController::class, 'index']);