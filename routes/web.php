<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\WritersController;
// use App\Http\Controllers\PopularController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about',function(){
    return view('Main.AboutUs');
})->name('about');
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoriesController::class, 'show'])->name('categories.show');
Route::get('/articles/{id}', [ArticlesController::class, 'show'])->name('articles.show');
Route::get('/writers', [WritersController::class, 'index'])->name('writers.index');
Route::get('/writers/{id}', [WritersController::class, 'show'])->name('writers.show');


// Route::get('/popular', [PopularController::class, 'index'])->name('popular');