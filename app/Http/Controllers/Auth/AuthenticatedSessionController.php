<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Authenticate the user
        $request->authenticate();

        // Regenerate session
        $request->session()->regenerate();

        // Redirect based on user role
        $user = Auth::user(); // Get the authenticated user

        if ($user->role === 'admin') {
            return redirect()->intended('/admin/dashboard'); // Admin dashboard
        } elseif ($user->role === 'manager') {
            return redirect()->intended('/manager/dashboard'); // Manager dashboard
        } else {
            return redirect()->intended('/user/dashboard'); // User dashboard
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}