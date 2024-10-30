<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume; // Import the Resume model

class ResumeController extends Controller
{
    public function show()
    {
        // Fetch the resume from the database
        $resume = Resume::first(); // Fetch the first resume record

        return view('resume', compact('resume')); // Pass the resume data to the view
    }
}

