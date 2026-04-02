<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

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
