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
    return view('news');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //world

// NEWS
Route::get('/news/detail/{new}', [App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('/news/sport', [App\Http\Controllers\NewsController::class, 'sport'])->name('news.sport');
Route::get('/news/world', [App\Http\Controllers\NewsController::class, 'world'])->name('news.world');
Route::get('/news/technology', [App\Http\Controllers\NewsController::class, 'technology'])->name('news.technology');
Route::get('/news/entertainment', [App\Http\Controllers\NewsController::class, 'entertainment'])->name('news.entertainment');
Route::get('/news/science', [App\Http\Controllers\NewsController::class, 'science'])->name('news.science');
Route::get('/news/travel', [App\Http\Controllers\NewsController::class, 'travel'])->name('news.travel');
Route::get('/news/politics', [App\Http\Controllers\NewsController::class, 'politics'])->name('news.politics');
Route::get('/news/business', [App\Http\Controllers\NewsController::class, 'business'])->name('news.business');
Route::get('/news/weather', [App\Http\Controllers\NewsController::class, 'weather'])->name('news.weather');

// BLOG
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post');

Route::middleware('auth')->group(function() {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

    Route::post('/posts/comments/reply', [App\Http\Controllers\ReplyController::class, 'create'])->name('reply.create');
    Route::get('/admin/comments/replies', [App\Http\Controllers\ReplyController::class, 'index'])->name('reply.index');
    Route::get('/admin/comments/replies/{comment}', [App\Http\Controllers\ReplyController::class, 'show'])->name('reply.show');

});



// can Authorization
//Route::get('/admin/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->middleware('can:view,post')->name('post.edit');

