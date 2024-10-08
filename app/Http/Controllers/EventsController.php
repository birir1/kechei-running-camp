<?php

namespace App\Http\Controllers;

use App\Models\Event; // Adjust based on your actual model structure
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        // Fetch events from the database
        $events = Event::all(); // Modify according to your needs
        
        return view('Dashboards.user.userevents', compact('events'));
    }
}