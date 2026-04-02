<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::get('Products', [ProductController::class, 'index'])->name('AppSidebar.vue');
Route::get('Products/new', [ProductController::class, 'new'])->name('products.new');
Route::post('Products/new', [ProductController::class, 'new'])->name('products.new');
Route::get('Products/{id}/update', [ProductController::class, 'update'])->name('products.update');
Route::put('Products/{id}/update', [ProductController::class, 'update'])->name('products.update');
Route::delete('Products/{id}/delete', [ProductController::class, 'delete'])->name('products.delete');

Route::get('myhome', [HomeController::class, 'index'])->name('myhome');

Route::inertia('/', 'Welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::inertia('anclas', 'Anclas', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('bookmark.show');

Route::delete('anclas', [BookmarkController::class, 'destroy'])->name('bookmark.destroy');

Route::post('anclas', [BookmarkController::class, 'add'])->name('bookmark.add');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
