<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class RegistrationController extends Controller
{
    public function create()
    {

        return view('auth.register');

    }

    public function store(RegistrationRequest $request)
    {

        $already_username = User::whereUsername($request->username)->first();
        // dd($already_username);

        if ($already_username){
            throw ValidationException::withMessages([
                'username' => 'username sudah ada',
            ]);
        }

        User::create($request->all());
        return redirect('/login')->with('success', 'Thank you, you are now registered, Please Login!');

    }
}
