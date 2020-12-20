<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {

    Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
    Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
    Route::patch('/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::delete('/{category}/destroy', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');

});
