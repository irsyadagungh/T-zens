<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcaraEditController extends Controller
{
    public function viewAdminAcaraEdit($id)
    {
        return view('acara-edit');
    }
}
