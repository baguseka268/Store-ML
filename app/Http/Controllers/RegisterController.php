<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request)
    {
        User::create([
            'username' =>$request->username,
            'email' => $request->email,
            'number' => $request->number,
            'password' => $request->password,
        ]);

        return view('home');
    }
}
