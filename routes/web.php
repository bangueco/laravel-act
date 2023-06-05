<?php

use App\Http\Controllers\AnimationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksController;
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

Route::get('/',[HomeController::class,'returnPage'])->name('home');

Route::get('/animation',[AnimationController::class,'returnPage'])->name('animation');

Route::get('/tasks',[TasksController::class,'returnPage'])->name('tasks');

Route::get('/profile',[ProfileController::class,'returnPage'])->name('profile');

Route::get('/contact',[ContactController::class,'returnPage'])->name('contact');