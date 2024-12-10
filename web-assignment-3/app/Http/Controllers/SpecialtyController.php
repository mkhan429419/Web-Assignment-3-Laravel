<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialty;

class SpecialtyController extends Controller
{
    public function index()
    {
        // Fetch all specialties from the database
        $specialties = Specialty::all();

        // Return the index view with the specialties data
        return view('index', compact('specialties'));
    }
}
