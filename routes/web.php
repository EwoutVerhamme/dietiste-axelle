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


Route::get('aanbod', function () {
    return Inertia::render('Services');
})->name('aanbod');


Route::get('contact', function () {
    return Inertia::render('Contact');
})->name('contact');



require __DIR__.'/auth.php';