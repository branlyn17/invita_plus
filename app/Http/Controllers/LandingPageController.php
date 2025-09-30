<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing_test');
    }

    public function changeLanguage($lang)
    {
        if (in_array($lang, ['en', 'es'])) {
            session(['locale' => $lang]);
            App::setLocale($lang);
        }

        // Redirige a la landing principal
        return redirect()->route('landing.test');
    }
}
