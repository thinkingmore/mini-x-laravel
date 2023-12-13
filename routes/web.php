<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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


Route::view('/', 'welcome');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');


Route::post('/posts', [PostController::class, 'store'])->name('post.create');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::post('/posts/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('post.destroy');

