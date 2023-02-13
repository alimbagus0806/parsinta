<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegistrationController extends Controller
{
    public function create()
    {

        return view('auth.register');

    }

    public function store(RegistrationRequest $request)
    {

        User::create($request->all());

        return redirect('/login')->with('success', 'Thank you, you are now registered, Please Login!');

    }
}
