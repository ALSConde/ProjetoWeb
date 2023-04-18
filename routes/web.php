<?php

use App\Http\Controllers\SchoolController;
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
});

Route::prefix('/school')->group(function (){
    Route::get('/', [SchoolController::class, 'index'])->name('school.index');
    Route::get('/create', [SchoolController::class, 'create'])->name('school.create');
    Route::get('/edit/{id}', [SchoolController::class, 'edit'])->name('school.edit');
    Route::get('/exclude/{id}', [SchoolController::class, 'exclude'])->name('school.exclude');
    Route::post('/store', [SchoolController::class, 'store'])->name('school.store');
    Route::post('/update/{id}', [SchoolController::class, 'update'])->name('school.update');
    Route::post('/delete/{id}', [SchoolController::class, 'delete'])->name('school.delete');
});
