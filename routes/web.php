<?php
use App\Http\Controllers\KelurahanController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::prefix("admin")->group(function () {
    Route::get("/", function () {
        return view("admin.index");
    })->name("dashboard");
    Route::resource("kelurahan", KelurahanController::class);
});
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
