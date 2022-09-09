<?php

use App\Http\Controllers\ExamsController;
use \App\Http\Controllers\ApiExamsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::get('/exams', [ExamsController::class, 'exams'])->name('api.exams');
Route::get('/methods', [ExamsController::class, 'methods'])->name('api.exam');
Route::get('/exam', [ExamsController::class, 'examDetail'])->name('api.examDetail');



Route::apiResource('/exams', ApiExamsController::class);
