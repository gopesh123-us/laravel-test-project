<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $address = "Gainesville, VA";
        return view('contact', ['msg' => $address]);
    }
}
