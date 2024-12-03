<?php

use App\Http\Controllers\BarbershopController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
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

Route::get('/dashboard/super_admin/employees', [EmployeeController::class,'index'])->name('super_admin.employees.index');
Route::get('/dashboard/super_admin/employees/{employee}', [EmployeeController::class,'show'])->name('super_admin.employees.show');
Route::get('/dashboard/super_admin/employees/{employee}/edit', [EmployeeController::class,'edit'])->name('super_admin.employees.edit');
Route::put('/dashboard/super_admin/employees/{employee}/update', [EmployeeController::class,'update'])->name('super_admin.employees.update');
Route::delete('/dashboard/super_admin/employees/{employee}/delete', [EmployeeController::class,'destroy'])->name('super_admin.employees.delete');

Route::get('/dashboard/super_admin', [DashboardController::class, 'index'])->name('super_admin.dashboard');
