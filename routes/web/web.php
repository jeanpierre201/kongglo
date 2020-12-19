<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');

Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post');

Route::middleware('auth')->group(function() {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

    Route::post('/posts/comments/reply', [App\Http\Controllers\ReplyController::class, 'create'])->name('reply.create');
    Route::get('/admin/comments/replies', [App\Http\Controllers\ReplyController::class, 'index'])->name('reply.index');
    Route::get('/admin/comments/replies/{comment}', [App\Http\Controllers\ReplyController::class, 'show'])->name('reply.show');

    Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
    Route::post('/admin/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');

});



// can Authorization
//Route::get('/admin/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->middleware('can:view,post')->name('post.edit');

