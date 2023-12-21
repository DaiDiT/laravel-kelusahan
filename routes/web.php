<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
	Route::get('/register', [RegisterController::class, 'index']);
	Route::post('/register', [RegisterController::class, 'store']);
	Route::get('/login', [LoginController::class, 'index'])->name('login');
	Route::post('/login', [LoginController::class, 'authenticate']);
	Route::get('/forgotten-password', function () {
	    return view('forgotten_password', [
	        'title' => 'Lupa sandi',
	        'nav_type' => 2
	    ]);
	});
});

Route::middleware('auth')->group(function () {
	Route::get('/', [HomeController::class, 'index'])->name('home');
	Route::get('/about', function () {
	    return view('about', [
	        'title' => 'Tentang',
	        'nav_type' => 3
	    ]);
	});
	Route::post('/logout', [LoginController::class, 'logout']);
	Route::get('/users/{user:id}', [UserPostController::class, 'index']);
	Route::get('/posts', [PostController::class, 'index']);
	Route::post('/posts', [PostController::class, 'store']);
	Route::get('/posts/{post:id}', [PostController::class, 'show']);
	Route::get('/posts/{post:id}/edit', [PostController::class, 'edit']);
	Route::put('/posts/{post:id}', [PostController::class, 'update']);
	Route::delete('/posts/{post:id}', [PostController::class, 'destroy']);
	Route::post('/posts/{post:id}/likes', [PostLikeController::class, 'store']);
	Route::delete('/posts/{post:id}/likes', [PostLikeController::class, 'destroy']);
	Route::post('/posts/{post:id}/comments', [PostCommentController::class, 'store']);
	Route::get('/posts/{post:id}/comments/{comment:id}/edit', [PostCommentController::class, 'edit']);
	Route::put('/posts/{post:id}/comments/{comment:id}', [PostCommentController::class, 'update']);
	Route::delete('/posts/{post:id}/comments/{comment:id}', [PostCommentController::class, 'destroy']);
});