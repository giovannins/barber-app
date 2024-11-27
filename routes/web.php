<?php

use App\Http\Controllers\BarbershopController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/dashboard/super_admin/barbershops', [BarbershopController::class,'index'])->name('super_admin.barbershops.index');
Route::get('/dashboard/super_admin/barbershops/{barbershop}', [BarbershopController::class,'show'])->name('super_admin.barbershops.show');
Route::get('/dashboard/super_admin/barbershops/{barbershop}/edit', [BarbershopController::class,'edit'])->name('super_admin.barbershops.edit');
Route::put('/dashboard/super_admin/barbershops/{barbershop}/update', [BarbershopController::class,'update'])->name('super_admin.barbershops.update');
