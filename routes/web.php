<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
        
    Route::get('/list', [UserController::class, 'index'])->name('list.index');
    Route::get('/list/{id}/edit/', [UserController::class, 'edit'])->name('list.edit');
    Route::put('/list/{id}', [UserController::class, 'update'])->name('list.update');
    Route::delete('/list/{id}', [UserController::class, 'destroy'])->name('list.destroy');
    });

Route::middleware('auth')->group(function () {  

    Route::post('/profile', [RegisteredUserController::class, 'store'])->name('profile.register');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});


require __DIR__.'/auth.php';
