<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Numatytasis Jetstream maršrutas
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';

// Pagrindinis puslapis rodys PostController index metodą
Route::get('/', [PostController::class, 'index'])->name('home');

// Sukuriame resurso maršrutus
Route::resource('posts', PostController::class)->middleware(['auth']);
