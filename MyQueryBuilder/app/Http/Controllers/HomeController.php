<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function english()
    {
        App::setLocale('en');
        return view('home');
    }

    public function hindi()
    {
        App::setLocale('hi');
        return view('home');
    }

    public function spanish()
    {
        App::setLocale('es');
        return view('home');
    }
}