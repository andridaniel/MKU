<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/createData', function () {
    return view('createData');
})->middleware(['auth', 'verified'])->name('createData');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dataKomputer', [MasterController::class, 'dataKomputer'])->name('dataKomputer');
    Route::get('/', [MasterController::class, 'detailKomputer'])->name('detailKomputer');
});

require __DIR__.'/auth.php';
