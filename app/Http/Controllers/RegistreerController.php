<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gebruiker ;

class RegistreerController extends Controller
{
    public function create(Request $request) {

        $new_user = new Gebruiker;

        $new_user->name = $request->name;
        $new_user->email = $request->email;
        $new_user->password = bcrypt($request->password);

        $new_user->save();

        return redirect('/login');
    }
}
