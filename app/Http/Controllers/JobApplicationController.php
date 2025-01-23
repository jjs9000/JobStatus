<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'status' => 'required|string',
            'location' => 'required|string|max:255',
            'responsibilities' => 'nullable|string',
            'allowance' => 'nullable|numeric',
            'platform' => 'required|string|max:255',
        ]);

        // Save the data to the database
        JobApplication::create($validated);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Job application added successfully.');
    }
    
    public function index()
    {
        $jobs = JobApplication::all();
        return view('livewire.main.index', compact('jobs'));
    }
}
