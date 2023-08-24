<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    //  public function handleLogin(Request $request)
    // {
    /* $x = $_POST['name'];
        $y = $_POST['email'];
        $z = $_POST['pwd'];
        return ($x . ' ' . $y . ' ' . $z); */
    /* var_dump($request->name);
        var_dump($request->email);
        var_dump($request->pwd); */
    // dd($request->all());
    //input field validation beloe

    /*  $request->validate([
            'name' => ['required', 'alpha', 'min:6', 'max:10'],
            'email' => ['required', 'email'],
            'password' => 'required'
        ], [
            'name.required' => 'Please note name is a required field',
            'name.alpha' => 'Name should always have alphabets only',
            'name.min:6' => 'Name is too short. make is longer, at least 6 characters',
        ]);

        return $request; */
    // }

    public function handleLogin(LoginRequest $loginRequest)
    {
        return $loginRequest;
    }
}
