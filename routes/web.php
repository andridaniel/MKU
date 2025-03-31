<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dataKomputer', function () {
    return view('dataKomputer');
})->middleware(['auth', 'verified'])->name('dataKomputer');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dataKomputer', [MasterController::class, 'showData'])->name('dataKomputer');
    Route::post('/storeData', [MasterController::class, 'storeData'])->name('storeData');
    Route::get('/createData', [MasterController::class, 'createData'])->name('createData');
    Route::get('/detailKomputer/{id}', [MasterController::class, 'detailKomputer'])->name('detailKomputer');
    Route::get('/updateData', [MasterController::class, 'updateData'])->name('updateData');
    Route::delete('deleteData/{id}', [MasterController::class, 'deleteData'])->name('deleteData');



});

require __DIR__.'/auth.php';
