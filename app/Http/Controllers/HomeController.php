<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $blogs =
            [
                [
                    'title' => "Invokable",
                    'body' => 'A single action controller requires --invokable flag',
                    'status' => 1,

                ],
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
                [
                    'title' => "Original Home Controller",
                    'body' => 'Original Home Controller has been renamed to __HomeController',
                    'status' => 1,
                ],

            ];
        $authors = [
            [
                'name' => 'Gopesh Sharma',
                'age' => '55',
                'bookspublished' => 2,
            ],
            [
                'name' => 'Malcolm Gladwell',
                'age' => '65',
                'bookspublished' => 12,
            ],
            [
                'name' => 'Richard Banks',
                'age' => '54',
                'bookspublished' => 10,
            ]

        ];
        return view('home', compact(['blogs', 'authors']));
    }
}
