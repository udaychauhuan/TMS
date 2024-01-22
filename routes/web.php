<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', [AuthController::class, 'Login']);
Route::Post('/login', [AuthController::class, 'Login'])->name('Login');
Route::get('/loginOut', [AuthController::class, 'LogOut'])->name('LogOut');

Route::middleware(['auth'])->group(function(){

    Route::get('/home', [ProjectController::class, 'index'])->name('home');

    Route::get('/task', [TaskController::class, 'index'])->name('tasks');
    Route::get('/taskLog', [TaskController::class, 'displayTaskLogs'])->name('tasksLogs');
    Route::get('/report', [TaskController::class, 'displayReport'])->name('report');

    Route::get('/user', [UserController::class, 'index'])->name('users');
    Route::post('/user/create', [UserController::class, 'create'])->name('usercreate');
});

