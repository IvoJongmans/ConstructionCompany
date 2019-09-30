<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UitlogController extends Controller
{
    public function logout () {
        //logout user
        Auth::guard('gebruiker')->logout();
        // redirect to homepage
        return redirect('/');
    }
}
