<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', [AuthController::class, 'Login']);
Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::post('/login', [AuthController::class, 'LoginCheck'])->name('LoginCheck');
Route::get('/loginOut', [AuthController::class, 'LogOut'])->name('LogOut');

Route::middleware(['auth'])->group(function(){

    Route::get('/home', [ProjectController::class, 'index'])->name('home');
    Route::post('/project/create', [ProjectController::class, 'create'])->name('projectcreate');
    Route::post('/project/edit', [ProjectController::class, 'edit'])->name('projectedit');

    Route::get('/task', [TaskController::class, 'index'])->name('tasks');
    Route::get('/taskLog', [TaskController::class, 'displayTaskLogs'])->name('tasksLogs');
    Route::get('/report', [TaskController::class, 'displayReport'])->name('report');

    Route::get('/user', [UserController::class, 'index'])->name('users');
    Route::post('/user/create', [UserController::class, 'StoreUser'])->name('usercreate');
    Route::Post('/user/edit', [UserController::class, 'edit'])->name('useredit');
    Route::Post('/user/update', [UserController::class, 'update'])->name('userupdate');
    Route::any('/user/delete/{id}', [UserController::class, 'destroy'])->name('userdelete');

});

