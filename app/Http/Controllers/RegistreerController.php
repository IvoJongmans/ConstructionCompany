<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistreerController extends Controller
{
    public function create(Request $request) {

        dd($request);
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }
}
