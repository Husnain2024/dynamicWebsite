<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomebannerController;


Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminDashboardController::class, 'index'])->name('dashboard');


Route::get('/', [HomebannerController::class, 'homeBanner'])->name('home');


// Route::resource('homebanner', HomebannerController::class);


// Routes that require authentication
Route::middleware(['auth'])->group(function () {
    // Display a list of homebanners
    Route::get('homebanner', [HomebannerController::class, 'index'])->name('homebanner.index');

    // Show the form for creating a new homebanner
    Route::get('homebanner/create', [HomebannerController::class, 'create'])->name('homebanner.create');

    // Store a newly created homebanner in storage
    Route::post('homebanner', [HomebannerController::class, 'store'])->name('homebanner.store');

    // Display the specified homebanner
    Route::get('homebanner/{homebanner}', [HomebannerController::class, 'show'])->name('homebanner.show');

    // Show the form for editing the specified homebanner
    Route::get('homebanner/{homebanner}/edit', [HomebannerController::class, 'edit'])->name('homebanner.edit');

    // Update the specified homebanner in storage
    Route::put('homebanner/{homebanner}', [HomebannerController::class, 'update'])->name('homebanner.update');

    // Remove the specified homebanner from storage
    Route::delete('homebanner/{homebanner}', [HomebannerController::class, 'destroy'])->name('homebanner.destroy');
});

