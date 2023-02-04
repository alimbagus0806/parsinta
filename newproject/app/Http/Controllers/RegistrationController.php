<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create() {

        return view('auth.register');

    }

    public function store(Request $request) {

        $request->validate([
            'username' => ['required', 'alpha_num', 'min:3', 'max:25'],
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email'],
            'password'=>['required', 'min:8'],

        ]);

User::create([
    'username' => $request -> username,
    'name' => $request -> name,
    'email' => $request -> email,
    'password' => Hash::make($request -> password), 


]);



    }







}
