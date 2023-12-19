<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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


Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/forgotten-password', function () {
    return view('forgotten_password', [
        'title' => 'Lupa sandi',
        'nav_type' => 2
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'Tentang',
        'nav_type' => 3
    ]);
})->middleware('auth');

Route::get('/posts', [PostController::class, 'index'])->middleware('auth');

Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts/{post:id}', [PostController::class, 'show'])->middleware('auth');

Route::get('/posts/{post:id}/edit', [PostController::class, 'edit'])->middleware('auth');

Route::put('/posts/{post:id}', [PostController::class, 'update']);

Route::delete('/posts/{post:id}', [PostController::class, 'destroy']);

Route::post('/like-post', [LikeController::class, 'likePost']);