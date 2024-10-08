<?php

// app/Http/Controllers/UserBookingsController.php

namespace App\Http\Controllers;

use App\Models\Booking; // Ensure you have the Booking model imported
use Illuminate\Http\Request;

class UserBookingsController extends Controller
{
    public function index()
    {
        // Fetch bookings for the authenticated user
        $bookings = Booking::where('user_id', auth()->id())->get();

        // Return the view with the bookings
        return view('Dashboards.user.userbookings', compact('bookings'));
    }
}