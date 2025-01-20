<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\MangaController;

// Página de inicio (welcome)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Autenticación (login)
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Registro de usuario
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Dashboard protegido
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Cerrar sesión
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('/manga-crud', [MangaController::class, 'index'])->name('manga-crud.index');
Route::post('/manga-crud', [MangaController::class, 'store'])->name('manga-crud.store');
Route::get('/manga-crud/edit/{id}', [MangaController::class, 'edit'])->name('manga-crud.edit');
Route::put('/manga-crud/update/{id}', [MangaController::class, 'update'])->name('manga-crud.update');
Route::delete('/manga-crud/delete/{id}', [MangaController::class, 'destroy'])->name('manga-crud.destroy');



