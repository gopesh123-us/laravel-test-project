<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('home', [HomeController::class, 'index']);

Route::get('about', [AboutController::class, 'index']);

Route::get('contact', [ContactController::class, 'index'])->name('contact');

/* Route::get('about', function () {
    $aboutus = "We are UX designers";
    $location = "We are based off Gainesville, VA";
    return view('about.index', compact(['aboutus', 'location']));
})->name('aboutus'); */

Route::get('contact/{id}', function ($id) {
    return "<h1>Contact id is $id</h1>";
})->name('edit-contact');

Route::get('info', function () {
    return phpinfo();
});



Route::get('edit-contact', function () {
    return "<a href='" . route('edit-contact', [15], false) . "'>Edit Contact</a>";
});

Route::get('/services', function () {
    return view('services');
});

Route::get('services/{id}', function ($id) {
    return "Service page {$id}";
});

/**Route Grouping */

Route::group(["prefix" => "customer"], function () {
    Route::get('/', function () {
        return "<h1>Customer List</h1>";
    });

    Route::get('/create', function () {
        return "<h1>Customer Add</h1>";
    });

    Route::get('/show', function () {
        return "<h1>Customer Show</h1>";
    });
});

/**Fallback */
Route::fallback(function () {
    return "Page does not exist";
});
