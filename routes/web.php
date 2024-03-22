<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('App');
})->name('home');

Route::get('werkwijze', function () {
    return Inertia::render('Method');
})->name('werkwijze');


Route::get('diensten', function () {
    return Inertia::render('Services');
})->name('diensten');


Route::get('contact', function () {
    return Inertia::render('Contact');
})->name('contact');



require __DIR__.'/auth.php';