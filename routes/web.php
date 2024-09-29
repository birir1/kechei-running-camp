<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BaseFrontendController;

Route::get('/', [BaseFrontendController::class, 'index']);
Route::get('/about', [BaseFrontendController::class, 'about']);
// Add other routes similarly




Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// User Dashboard
Route::get('/admin/dashboard', function () {
    return view('Dashboards.admin');
})->name('admin.dashboard');

Route::get('/manager/dashboard', function () {
    return view('Dashboards.manager');
})->name('manager.dashboard');

Route::get('/user/dashboard', function () {
    return view('Dashboards.user');
})->name('user.dashboard');


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::post('/contacts/submit', [ContactController::class, 'submit'])->name('contacts.submit');

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/packages', function () {
    return view('frontend.packages');
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');