<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function index()
    {
        $jobs = JobApplication::all();
        return view('livewire.main.index', compact('jobs'));
    }
}
