<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function __invoke(Request $identifier) {
        
        // $username = $request -> username;

        return view('profile', ['username' => $identifier]);
    }
}
