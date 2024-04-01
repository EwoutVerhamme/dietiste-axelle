<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Mail;
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

Route::post('contact', function () {
    

    // Send email
    Mail::send('emails.contact', [
        'name' => request('name'),
        'email' => request('email'),
        'message' => request('message')
    ], function ($message) {
        $message->to("info@dietisteaxelle.be");
        $message->subject("Nieuw bericht van de website");
    });

    return redirect()->back()->with('message', 'Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.');

})->name('contact.store');



require __DIR__.'/auth.php';