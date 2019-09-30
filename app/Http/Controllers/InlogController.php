<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gebruiker;
use Auth;

class InlogController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('gebruiker')->attempt($credentials)) {
            return view('home');
        }

        else {
            dd('Login Failed');
        }

        

        // return redirect('/');
        
    }
}
