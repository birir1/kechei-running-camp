<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Fetch all events
        $events = Event::with('admin')->get(); // Eager load admin

        // Return the view with the events
        return view('events.index', compact('events'));
    }

    // Optionally, create a method to show a single event
    public function show($id)
    {
        $event = Event::with('admin')->findOrFail($id); // Find the event by ID

        return view('events.show', compact('event'));
    }
}