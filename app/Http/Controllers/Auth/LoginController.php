<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; // Ensure this is included
use Illuminate\Support\Facades\Auth; // Include this for authentication

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login'); // Ensure the view exists
    }

    // Modify the authenticated method for role-based redirection
    protected function authenticated(Request $request, $user)
    {
        // Check the user's role and redirect accordingly
        switch ($user->role) {
            case 'admin':
                return redirect()->route('admin.dashboard'); // Redirect to admin dashboard
            case 'manager':
                return redirect()->route('manager.dashboard'); // Redirect to manager dashboard
            case 'user':
                return redirect()->route('user.dashboard'); // Redirect to user dashboard
            default:
                return redirect()->route('home'); // Default redirection for unknown roles
        }
    }
}