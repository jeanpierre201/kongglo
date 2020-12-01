<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {
    Route::get('/admin/comments', [App\Http\Controllers\CommentController::class, 'index'])->name('comment.index');
    Route::post('/admin/comments/submit', [App\Http\Controllers\PostController::class, 'comment'])->name('post.comment');
    Route::delete('/posts/{comment}/destroy', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comment.destroy');
    Route::patch('/posts/{comment}/update', [App\Http\Controllers\CommentController::class, 'update'])->name('comment.update');
    Route::get('/admin/comments/{post}', [App\Http\Controllers\CommentController::class, 'show'])->name('comment.show');

});
