<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Retorna la vista resources/views/landing.blade.php
        return view('landing');
    }
}
