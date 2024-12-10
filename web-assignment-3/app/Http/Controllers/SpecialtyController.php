<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialty;

class SpecialtyController extends Controller
{
    public function index()
    {
        $specialties = Specialty::all(); // getting all specialties from database
        return view('index', compact('specialties')); // showing index view with specialties
    }
}
