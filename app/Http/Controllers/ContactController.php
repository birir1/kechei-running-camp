<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // If you want to send emails

class ContactController extends Controller
{
    public function submit(Request $request)
    {
       
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the data (e.g., send an email or save to database)
        // Example: send an email (assuming you have a Mailable set up)
        /*
        Mail::to('your_email@example.com')->send(new ContactMessage($validatedData));
        */

        // Optionally, redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your message!');
    }
}