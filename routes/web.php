<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::group([""], function () {
    Route::get('/', [HomeController::class, 'index'])->name('homepage');
    Route::get('article/{article}', [HomeController::class, 'article'])->name('article.show');
    Route::get('tag/list', [HomeController::class, 'tags'])->name('tag.list');
    Route::get('tag/{tag}', [HomeController::class, 'tag'])->name('tagArticles');
    Route::get('category/list', [HomeController::class, 'categories'])->name('category.list');
    Route::get('category/{category}', [HomeController::class, 'category'])->name('categoryArticles');
    Route::get('about', [HomeController::class, 'about'])->name('about');
    Route::post('comment', [HomeController::class, 'comment'])->name('comment');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('', [MainController::class, 'dashboard'])->name('admin-dashboard');
    Route::resources([
        'articles' => ArticleController::class,
        'categories' => CategoryController::class,
        'tags' => TagController::class,
    ]);
    Route::resource('comments', CommentController::class)->only(['index', 'destroy']);
});


Route::get('test', function () {
    dd(Auth::user()->is_admin);
});
