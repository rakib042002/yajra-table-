<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    

    Route::get('/user',[UserController::class,'index'])->name('user');
    Route::get('/search',[UserController::class,'search'])->name('search');

    Route::get('/product',[ProductController::class,'index'])->name('product');
    Route::get('/product/search',[ProductController::class,'search'])->name('product.search');

    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::get('/category/search',[CategoryController::class,'search'])->name('category.search');

    
    
});
