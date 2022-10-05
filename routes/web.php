<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiagnosticMethodController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AgreementController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('#ourExams', [FrontController::class, 'index'])->name('front.ourExams');
Route::get('#institutional', [FrontController::class, 'index'])->name('front.institutional');
Route::get('#mvv', [FrontController::class, 'index'])->name('front.mvv');
Route::get('#agreements', [FrontController::class, 'index'])->name('front.agreements');
Route::get('#staff', [FrontController::class, 'index'])->name('front.staff');

Route::get('/blog', [FrontController::class, 'blog'])->name('front.blog');
Route::get('/artigo/{slug}', [FrontController::class, 'article'])->name('front.post');
Route::get('/medico/{slug}', [FrontController::class, 'teamMember'])->name('front.member');
Route::get('/exame/{slug}', [FrontController::class, 'exame'])->name('front.exame');
Route::get('/politica-de-privacidade', [FrontController::class, 'privacyPolicy'])->name('front.privacyPolicy');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::resource('post', PostController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('category', CategoryController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('diagnostic', DiagnosticMethodController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('exams', ExamsController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('staff', StaffController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('agreement', AgreementController::class)->middleware(['auth:sanctum', 'verified']);


//Route::get('/logout', function () {
//    return Inertia::render('Front/Index');
//});
