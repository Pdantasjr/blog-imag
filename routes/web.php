<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


//Route::get('/', function () {
//    return Inertia::render('Front/Index', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//    ]);
//});

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/blog', [FrontController::class, 'blog'])->name('front.blog');
Route::get('/artigo/{slug}', [FrontController::class, 'article'])->name('front.post');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::resource('post', PostController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('category', CategoryController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('diagnostic', CategoryController::class)->middleware(['auth:sanctum', 'verified']);


Route::get('/logout', function () {
    return Inertia::render('Front/Index');
});
