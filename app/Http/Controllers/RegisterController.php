<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mlstore;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request)
    {
        Mlstore::create([
            'input_username' =>$request->input_username,
            'input_email' => $request->input_email,
            'input_number' => $request->input_number,
            'input_password' => $request->input_password,
        ]);

        return view('home');
    }
}
