<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Fetch all events (filter as necessary)
        $events = Event::with('admin')->get(); // Assuming 'admin' is a relationship in Event model

        // Return the user dashboard view with user and events data
        return view('Dashboards.user', compact('user', 'events'));
    }
}