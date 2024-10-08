<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function profile()
    {
        return view('admin.settings.profile');
    }

    public function notifications()
    {
        return view('admin.settings.notifications');
    }
}