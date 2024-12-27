<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistroVentaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/registroventa', [RegistroVentaController::class, 'index'])->name('registroventa.index');

Route::get('/registroventa/create', [RegistroVentaController::class, 'create'])->name('registroventa.create');

Route::post('/registroventa', [RegistroVentaController::class, 'store'])->name('registroventa.store');

Route::get('/registroventa/{registroVenta}', [RegistroVentaController::class, 'show'])->name('registroventa.show');

Route::get('/registroventa/{registroVenta}/edit', [RegistroVentaController::class, 'edit'])->name('registroventa.edit');
Route::put('/registroventa/{registroVenta}', [RegistroVentaController::class, 'update'])->name('registroventa.update');

Route::delete('/registroventa/{registroVenta}', [RegistroVentaController::class, 'destroy'])->name('registroventa.destroy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
