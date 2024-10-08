<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class UserEventsController extends Controller
{
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Check if the user is authenticated
        if (!$user) {
            return redirect()->route('login')->withErrors('You must be logged in to view your events.');
        }

        // Fetch all events, optionally filter by some criteria if needed
        $events = Event::with('admin')->get(); // Fetch events with the admin who posted them

        // Return the view with events data
        return view('Dashboards.user.userevents', compact('user', 'events'));
    }
}