<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CreatorController extends Controller
{
    public function show(){
        if (Auth::guard('gebruiker')->check()){
            return view('creator');
        }
        else {
            //Hier nog een flash session meegeven 'eerst inloggen oid'
            return view('login');
        }
    }
}
