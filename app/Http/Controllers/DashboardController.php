<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function userDashboard()
    {
        return view('dashboards.user');  // Return user dashboard view
    }

    public function adminDashboard()
    {
        return view('dashboards.admin'); // Return admin dashboard view
    }

    public function managerDashboard()
    {
        return view('dashboards.manager'); // Return manager dashboard view
    }
}