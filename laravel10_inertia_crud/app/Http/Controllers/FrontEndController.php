<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use DB;

class FrontEndController extends Controller
{
    public function Home()
    {
        return Inertia::render('Home');
    }

    public function About()
    {
        return Inertia::render('About');
    }
    public function Product()
    {
       $products = DB::table('products')->get();
        return Inertia::render('Product', ['products' => $products]);
    }

    public function create()
    {
        return Inertia::render('ProductEntry');
    }
}
