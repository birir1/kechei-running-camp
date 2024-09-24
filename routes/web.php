<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/video', function () {
    return view('frontend.video');
});

Route::get('/community', function () {
    return view('frontend.community');
});

Route::get('/accomodation', function () {
    return view('frontend.accomodation');
});

Route::get('/amenities', function () {
    return view('frontend.amenities');
});

Route::get('/contacts', function () {
    return view('frontend.contacts');
});

Route::get('/facilities', function () {
    return view('frontend.facilities');
});

Route::get('/endurance', function () {
    return view('frontend.endurance');
});

Route::get('/ourcoaches', function () {
    return view('frontend.ourcoaches');
});

Route::get('/events', function () {
    return view('frontend.events');
});

Route::get('/FAQs', function () {
    return view('frontend.FAQs');
});

Route::get('/flexibility', function () {
    return view('frontend.flexibility');
});

Route::get('/history', function () {
    return view('frontend.history');
});

Route::get('/ourathletes', function () {
    return view('frontend.ourathletes');
});

Route::get('/profiles', function () {
    return view('frontend.profiles');
});

Route::get('/rooms', function () {
    return view('frontend.rooms');
});

Route::get('/strength', function () {
    return view('frontend.strength');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/elitecamp', function () {
    return view('frontend.elitecamp');
});

Route::get('/juniorcamp', function () {
    return view('frontend.juniorcamp');
});

Route::get('/adultcamp', function () {
    return view('frontend.adultcamp');
});

Route::get('/training', function () {
    return view('frontend.training');
});

Route::get('/campsoverview', function () {
    return view('frontend.campsoverview');
});

Route::get('/trainingresources', function () {
    return view('frontend.trainingresources');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';