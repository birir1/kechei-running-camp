<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingPlan;
use App\Models\Event; // Import the Event model

class UserController extends Controller
{
    public function index()
    {
        return view('Dashboards.user.userprofile'); // Ensure this view exists
    }

    public function trainingPlans()
    {
        $trainingPlans = TrainingPlan::all(); // Fetch all training plans from the database
        return view('Dashboards.user.training-plans', compact('trainingPlans')); // Pass data to the view
    }

    public function events()
    {
        $events = Event::all(); // Fetch all events from the database
        return view('Dashboards.user.userevents', compact('events')); // Pass data to the view
    }

    public function bookings()
    {
        return view('Dashboards.user.userbookings'); // Ensure this view exists
    }

    public function packages()
    {
        return view('Dashboards.user.userpackages'); // Ensure this view exists
    }

    public function settings()
    {
        return view('Dashboards.user.usersettings'); // Ensure this view exists
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|integer', // Ensure duration is included
        ]);

        // Create a new training plan
        $trainingPlan = new TrainingPlan();
        $trainingPlan->title = $request->input('title');
        $trainingPlan->description = $request->input('description');
        $trainingPlan->duration = $request->input('duration'); // Ensure this is included
        $trainingPlan->save();

        // Redirect or return response
        return redirect()->route('training-plans.index')->with('success', 'Training plan added successfully!');
    }

    public function edit($id)
    {
        $plan = TrainingPlan::findOrFail($id); // Fetch the training plan by ID
        return view('user.edit-training-plan', compact('plan')); // Return the edit view
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $plan = TrainingPlan::findOrFail($id); // Find the training plan
        $plan->update($request->all()); // Update the training plan
        return redirect()->route('user.training-plans')->with('success', 'Training plan updated successfully.'); // Redirect with success message
    }

    public function destroy($id)
    {
        TrainingPlan::destroy($id); // Delete the training plan
        return redirect()->route('user.training-plans')->with('success', 'Training plan deleted successfully.'); // Redirect with success message
    }
}               