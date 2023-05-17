<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewSign()
    {
        return view('sign-up');
    }

    public function viewLogin()
    {
        return view('login');

    }

    public function viewForgot()
    {
        return view('forgot-pass');
    }

    public function viewLoginForgot()
    {
        return view('login-forgot');
    }

    public function viewDetilOrganisasi()
    {
        return view('detil-organisasi');
    }

    public function editOrganisasi()
    {
        return view('edit-admin-organisasi');
    }

    public function viewOrganisasi()
    {
        return view('organisasi');
    }

    public function viewAcara()
    {
        return view('acara');
    }

    public function viewDetilAcara()
    {
        return view('detil-acara');
    }

    public function loginDone()
    {
        return view('done');
    }

    public function viewAdmin()
    {
        return view('admin');
    }

    public function viewContact()
    {
        return view('contact');
    }

    public function viewAdminAcara()
    {
        return view('admin-acara');
    }
    public function viewAdminAcaraUpload()
    {
        return view('acara-upload');
    }
    public function viewAdminAcaraEdit()
    {
        return view('acara-edit');
    }
    public function viewAdminOrganisasi()
    {
        return view('admin-organisasi');
    }
    public function viewAdminOrganisasiEdit()
    {
        return view('edit-admin-organisasi');
    }
    public function uploadOrganisasi()
    {
        return view('upload-organisasi');
    }
}
