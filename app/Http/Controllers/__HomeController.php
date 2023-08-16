<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs =
            [
                [
                    'title' => "My Holy God",
                    'body' => 'Holy God is my savior',
                    'status' => 1,

                ],
                [
                    'title' => "Mindful Walking",
                    'body' => 'Best exercise to stay calm and workout',
                    'status' => 1,
                ],
                [
                    'title' => "Advent of AI",
                    'body' => 'Artificial Intelligence has change the world',
                    'status' => 0,
                ],
                [
                    'title' => "TypeScript",
                    'body' => 'Superset of JavaScript',
                    'status' => 1,
                ],

            ];
        return view('home', compact('blogs'));
    }
}
