<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainingPlanController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserEventsController;
use App\Http\Controllers\EventsController;

use App\Http\Controllers\BookingsController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BaseFrontendController;
use App\Http\Controllers\UserBookingsController;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\UserSettingsController;
use App\Http\Controllers\UserProfileController;

Route::get('/usersettings', [UserController::class, 'userSettings'])->name('user.usersettings');

Route::get('/userpackages', [UserController::class, 'userPackages'])->name('user.userpackages');

Route::get('/userbookings', [UserController::class, 'userBookings'])->name('user.userbookings');


Route::get('/userevents', [UserController::class, 'userevents'])->name('user.userevents');


// Admin Dashboard Route
// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');



Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('Dashboards.admin');
    })->name('admin.dashboard');
    
    // Other admin routes can be added here
});


// Admin Section - Route Group with Middleware
// Route::prefix('admin')->name('admin.')->middleware(['auth', 'is_admin'])->group(function () {
    // Dashboard Route
    // Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // User Management
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');

    // Event Management

    Route::get('/user/events', [EventsController::class, 'index'])->name('user.userevents');


    Route::get('/events', [App\Http\Controllers\Admin\EventController::class, 'index'])->name('events.index');
    Route::get('/events/create', [App\Http\Controllers\Admin\EventController::class, 'create'])->name('events.create');
    Route::post('/events', [App\Http\Controllers\Admin\EventController::class, 'store'])->name('events.store');
    Route::get('/events/{event}', [App\Http\Controllers\Admin\EventController::class, 'show'])->name('events.show');
    Route::get('/events/{event}/edit', [App\Http\Controllers\Admin\EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{event}', [App\Http\Controllers\Admin\EventController::class, 'update'])->name('events.update');
    Route::delete('/events/{event}', [App\Http\Controllers\Admin\EventController::class, 'destroy'])->name('events.destroy');

    // Event Reports
    Route::get('/reports', [App\Http\Controllers\Admin\ReportController::class, 'index'])->name('reports.index');

    // Settings (Profile and Notifications)
    Route::get('/settings/profile', [App\Http\Controllers\Admin\SettingsController::class, 'profile'])->name('settings.profile');
    Route::get('/settings/notifications', [App\Http\Controllers\Admin\SettingsController::class, 'notifications'])->name('settings.notifications');
// });

// Routes for User Bookings with Auth Middleware
Route::middleware(['auth'])->group(function () {
    // User Bookings Routes
    Route::get('/user/bookings', [UserBookingsController::class, 'index'])->name('user.bookings');
    Route::get('/user/bookings/create', [BookingsController::class, 'create'])->name('user.bookings.create');
    Route::post('/user/bookings', [BookingsController::class, 'store'])->name('user.bookings.store');
    Route::get('/user/bookings/{id}', [BookingsController::class, 'show'])->name('user.bookings.show');
    Route::get('/user/bookings/{id}/edit', [BookingsController::class, 'edit'])->name('user.bookings.edit');
    Route::put('/user/bookings/{id}', [BookingsController::class, 'update'])->name('user.bookings.update');
    Route::delete('/user/bookings/{id}', [BookingsController::class, 'destroy'])->name('user.bookings.destroy');
});

// Resourceful Route for Bookings (additional if needed)
Route::resource('bookings', BookingsController::class)->middleware(['auth']);

// User Events Routes with Auth Middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/user/events', [UserEventsController::class, 'index'])->name('user.events');
});

// User Dashboard and Profile Routes with Auth Middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/profile', [UserProfileController::class, 'show'])->name('dashboard.profile.show');
    Route::post('/dashboard/profile/update', [UserProfileController::class, 'update'])->name('dashboard.profile.update');
});

// User Settings Routes with Auth Middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/user/settings', [UserSettingsController::class, 'edit'])->name('user.settings.edit');
    Route::put('/user/settings', [UserSettingsController::class, 'update'])->name('user.settings.update');
});

// Package Routes with Auth Middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');
    Route::get('/packages/create', [PackageController::class, 'create'])->name('packages.create');
    Route::post('/packages', [PackageController::class, 'store'])->name('packages.store');
    Route::get('/packages/{package}/edit', [PackageController::class, 'edit'])->name('packages.edit');
    Route::put('/packages/{package}', [PackageController::class, 'update'])->name('packages.update');
    Route::delete('/packages/{package}', [PackageController::class, 'destroy'])->name('packages.destroy');
});


// User Booking Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/user/bookings', [BookingsController::class, 'index'])->name('user.bookings');
    Route::get('/user/bookings/create', [BookingsController::class, 'create'])->name('user.bookings.create');
    Route::post('/user/bookings', [BookingsController::class, 'store'])->name('user.bookings.store');
    Route::get('/user/bookings/{booking}/edit', [BookingsController::class, 'edit'])->name('user.bookings.edit');
    Route::put('/user/bookings/{booking}', [BookingsController::class, 'update'])->name('user.bookings.update');
    Route::delete('/user/bookings/{booking}', [BookingsController::class, 'destroy'])->name('user.bookings.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user/events', [EventController::class, 'index'])->name('user.userevents');
    // Other user event routes...
});


// Public Routes
Route::get('/', [BaseFrontendController::class, 'index']);
Route::get('/about', [BaseFrontendController::class, 'about']);

// Authentication Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Protected Routes with Auth Middleware
Route::middleware(['auth'])->group(function () {
    // User Events Routes
    Route::get('/user/events', [EventController::class, 'index'])->name('user.events');
    Route::get('/user/events/create', [EventController::class, 'create'])->name('user.events.create');
    Route::post('/user/events', [EventController::class, 'store'])->name('user.events.store');
    Route::get('/user/events/{event}/edit', [EventController::class, 'edit'])->name('user.events.edit');
    Route::put('/user/events/{event}', [EventController::class, 'update'])->name('user.events.update');
    Route::delete('/user/events/{event}', [EventController::class, 'destroy'])->name('user.events.destroy');
    Route::post('/user/events/{event}/attend', [EventController::class, 'attend'])->name('user.events.attend');

    // Training Plans Routes
    Route::resource('training-plans', TrainingPlanController::class);
});

// Route to view all training plans
Route::get('/training-plans', [TrainingPlanController::class, 'index'])->name('training.plans.index');


// User Dashboard
// yRoute::get('/admin/dashboard', function () {
//     return view('Dashboards.admin');
// })->name('admin.dashboard');


// Public Routes
Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

// Contact Form Route
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Dashboard Routes
Route::get('/manager/dashboard', function () {
    return view('Dashboards.manager');
})->name('manager.dashboard');

Route::get('/user/dashboard', function () {
    return view('Dashboards.user');
})->name('user.dashboard');

// User Profile Routes
Route::prefix('user')->group(function () {
    Route::get('/userprofile', [UserController::class, 'index'])->name('user.userprofile');
    Route::get('/training-plans', [UserController::class, 'trainingPlans'])->name('user.trainingplans');
    Route::post('/training-plans', [UserController::class, 'store'])->name('user.trainingplans.store');
    Route::get('/training-plans/edit/{id}', [UserController::class, 'edit'])->name('user.trainingplans.edit');
    Route::put('/training-plans/{id}', [UserController::class, 'update'])->name('user.trainingplans.update');
    Route::delete('/training-plans/{id}', [UserController::class, 'destroy'])->name('user.trainingplans.destroy');
    Route::get('/events', [UserController::class, 'events'])->name('user.events');
    Route::get('/bookings', [UserController::class, 'bookings'])->name('user.bookings');
    Route::get('/packages', [UserController::class, 'packages'])->name('user.packages');
    Route::get('/settings', [UserController::class, 'settings'])->name('user.settings');
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