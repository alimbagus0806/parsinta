<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create()
    {

        return view('auth.register');

    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required', 'max:255',
            'username' => 'required', 'min:3', 'max:255', 'unique:users', 'alpha_num',
            'email' => 'required', 'email:dns', 'max:255', 'unique:users',
            'password' => 'required', 'min:7', 'max:255', 'confirmed',
        ]);

        User::create($validated);

        return redirect('/login');

    }
}
