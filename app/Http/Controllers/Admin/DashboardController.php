<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch necessary data for dashboard overview
        return view('admin.dashboardoverview');
    }
}