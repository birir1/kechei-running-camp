<?php

namespace App\Http\Controllers;

use App\Models\TrainingPlan;
use Illuminate\Http\Request;

class TrainingPlanController extends Controller
{
    public function index()
    {
        // Fetch all training plans posted by admins
        $trainingPlans = TrainingPlan::with('admin')->get(); // Eager load admin

        // Return the view with the training plans
        return view('training_plans.index', compact('trainingPlans'));
    }
}