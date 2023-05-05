<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function add(Request $request)
    {
        // dd($request->except(["_token", "submit"]));
        Pengguna::create($request->except(["_token", "submit"]));
        return redirect('/login/view');
    }

    public function login(Request $request)
    {
        return redirect("/");
    }
}