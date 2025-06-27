<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/management', function () {
    return view('auth.login');
});
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/management/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.list');
    Route::post('/appointments/{id}/approve', [AppointmentController::class, 'approve'])->name('appointments.approve');
    Route::post('/appointments/{id}/reject', [AppointmentController::class, 'reject'])->name('appointments.reject');
    Route::get('/get-chart-data', [DashboardController::class, 'getChartData'])->name('chart-data');
});

require __DIR__.'/auth.php';
