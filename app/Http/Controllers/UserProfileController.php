<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    // Display the user profile along with events
    public function show()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Check if the user is authenticated
        if (!$user) {
            return redirect()->route('login')->withErrors('You must be logged in to view your profile.');
        }

        // Fetch events
        $events = Event::with('admin')->get(); // Get all events along with the admin who posted them

        // Return the view with user data and events
        return view('Dashboards.user.userprofile', compact('user', 'events'));
    }
}