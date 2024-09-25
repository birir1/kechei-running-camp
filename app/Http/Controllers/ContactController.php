<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage; // Mailable class
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Feedback; // Feedback model to store data

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

        // Store feedback in the database (optional)
        Feedback::create($validatedData); // Make sure Feedback model has fillable properties

        // Process the data (e.g., send an email)
        try {
            Mail::to('birirsospeter@yahoo.com')->send(new ContactMessage($validatedData));
        } catch (\Exception $e) {
            // Handle the error appropriately (e.g., log it or show an error message)
            return redirect()->back()->withErrors(['error' => 'There was an error sending your message.']);
        }

        // Optionally, redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you shortly.');
    }
}