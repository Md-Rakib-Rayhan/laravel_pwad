<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function Home()
    {
        return Inertia::render("Home");
        // return view('frontend.index');
    }
    public function About()
    {
        return Inertia::render("About");
        // return view('frontend.about');
    }
}
