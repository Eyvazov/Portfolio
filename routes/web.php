<?php

use App\Http\Controllers\back\ContactController;
use App\Http\Controllers\back\DashboardController;
use App\Http\Controllers\back\SettingsController;
use App\Http\Controllers\front\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', function (){
    return redirect('/admin/dashboard');
});

// Əsas Səhifə
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('admin/')->name('admin.')->middleware(['auth:sanctum', 'verified'])->group(function () {
    // Admin Panel Əsas Səhifə
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Parametrlər
    Route::get('settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('settings', [SettingsController::class, 'generalUpdate'])->name('settings.general.update');

    // Əlaqə
    Route::get('settings/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('settings/contact', [ContactController::class, 'contactUpdate'])->name('contact.update');
});
