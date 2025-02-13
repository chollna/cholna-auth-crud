<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('//', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




    Route::get('/crud', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('show/{product}', [ProductController::class, 'show'])->name('show');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
    Route::get('edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::put('edit/{product}', [ProductController::class, 'update'])->name('update');






});


// Route::get('/crud', [ProductController::class, 'index'])->name('index');
// Route::get('/create', [ProductController::class, 'create'])->name('create');
// Route::post('/store', [ProductController::class, 'store'])->name('store');
// Route::get('show/{product}', [ProductController::class, 'show'])->name('show');
// Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
// Route::get('edit/{product}', [ProductController::class, 'edit'])->name('edit');
// Route::put('edit/{product}', [ProductController::class, 'update'])->name('update');





require __DIR__.'/auth.php';
