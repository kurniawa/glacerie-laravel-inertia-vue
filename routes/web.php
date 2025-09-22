<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/gelato-pricelist', function () {return Inertia::render('GelatoPricelist');})->name('gelato-pricelist');
Route::get('/pastry-pricelist', function () {return Inertia::render('PastryPricelist');})->name('pastry-pricelist');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
