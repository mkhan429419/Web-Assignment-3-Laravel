<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Instructor;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();
        $instructors = Instructor::all(); 
        return view('about', compact('facilities','instructors')); 
    }
}
