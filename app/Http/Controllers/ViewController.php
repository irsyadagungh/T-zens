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
    session_start();
    $server = 'localhost';
    $username = 'root';
    $pass = '';
    $dbname = 'tzens';

    $conn = mysqli_connect($server, $username, $pass, $dbname);

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
        $id_acara = $_POST['submit'];
        $id_pengguna = $_SESSION['id'];

        $query = "INSERT INTO regis_acara (id_acara, id_pengguna) SELECT acara.id, pengguna.id FROM acara, pengguna WHERE pengguna.id = $id_pengguna AND acara.id = $id_acara";

        $result = mysqli_query($conn, $query);

        if ($result) {

        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    if (isset($_POST['submitt'])) {
        $id_organisasi = $_POST['submitt'];
        $id_pengguna = $_SESSION['id'];



        $query = "INSERT INTO regis_organisasi (id_organisasi, id_pengguna) SELECT organisasi.id, pengguna.id FROM organisasi, pengguna WHERE pengguna.id = $id_pengguna AND organisasi.id = $id_organisasi";

        $stmt = mysqli_query($conn, $query);



    }



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
