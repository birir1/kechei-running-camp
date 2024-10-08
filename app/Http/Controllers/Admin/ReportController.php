<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index()
    {
        $events = Event::all(); // Fetch events for reporting purposes
        return view('admin.reports.index', compact('events'));
    }
}