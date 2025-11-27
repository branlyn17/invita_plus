<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = "";
        return view('landing.landing', [
            'data' => $data,
        ]);
    }
}
