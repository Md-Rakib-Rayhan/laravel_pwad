<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        // return view('home', compact('students')); // in home page call ($students)
        return view('home', ['abc'=>$students]); // in home page call ($abc)

        // return print_r($students);        
        // return view('home');
        // return view('layouts.default');
        // return view('layouts/default');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

}