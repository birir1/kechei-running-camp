<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Get all users
        return view('admin.users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete(); // Delete the user
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}