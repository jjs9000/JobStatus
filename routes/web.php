<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Main\Index;

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

require __DIR__.'/auth.php';
