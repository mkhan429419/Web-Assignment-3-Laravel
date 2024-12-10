<?php

namespace App\Http\Controllers;

use App\Models\Facility;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all(); // Fetch all facilities
        return view('about', compact('facilities')); // Pass facilities to the view
    }
}
