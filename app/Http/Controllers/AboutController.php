<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $aboutus = 'Super';
        $location = 'West Coast';
        return view('about.index', compact(['aboutus', 'location']));
    }
}
