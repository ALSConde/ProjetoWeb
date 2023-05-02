<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/user')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/show/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::post('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
});

Route::prefix('/school')->group(function (){
    Route::get('/', [SchoolController::class, 'index'])->name('school.index');
    Route::get('/show/{id}', [SchoolController::class, 'show'])->name('school.show');
    Route::get('/create', [SchoolController::class, 'create'])->name('school.create');
    Route::get('/edit/{id}', [SchoolController::class, 'edit'])->name('school.edit');
    Route::post('/store', [SchoolController::class, 'store'])->name('school.store');
    Route::post('/update/{id}', [SchoolController::class, 'update'])->name('school.update');
    Route::post('/delete/{id}', [SchoolController::class, 'delete'])->name('school.delete');
});

Auth::routes(['verify' => true]);
