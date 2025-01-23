<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Main\Index;
use App\Http\Controllers\JobApplicationController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('main', Index::class)
    ->middleware(['auth'])
    ->name('main');

Route::middleware(['auth'])->group(function () {
    Route::post('/job-applications', [JobApplicationController::class, 'store'])->name('job-applications.store');
});

require __DIR__.'/auth.php';
