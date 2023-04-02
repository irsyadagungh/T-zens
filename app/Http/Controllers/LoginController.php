<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function view()
    {
        return view('sign-up');
    }

    public function add(Request $request)
    {
        dd($request->all());
    }
}