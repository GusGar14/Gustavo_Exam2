<?php

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

Route::get('/', function () {
    return view('welcome');
})->name ('welcome');

Route::get('/ex', [ExamController::class, 'index'])->name('ex');
Route::get('/ex1', [ExamController::class, 'index'])->name('ex');
Route::get('/ex2', [ExamController::class, 'index'])->name('ex');

