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

        $query = "INSERT INTO regis_acara (id_acara, nama_acara, id_pengguna, nama_pengguna) SELECT acara.id, acara.nama, pengguna.id, pengguna.nama FROM acara, pengguna WHERE pengguna.id = $id_pengguna AND acara.id = $id_acara";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    if (isset($_POST['submitt'])) {
        $id_organisasi = $_POST['submitt'];
        $id_pengguna = $_SESSION['id'];

        echo "id_organisasi: " . $id_organisasi . "<br>";
        echo "id_pengguna: " . $id_pengguna . "<br>";

        $query = "INSERT INTO regis_organisasi (id_organisasi, nama_organisasi, id_pengguna, nama_pengguna) SELECT organisasi.id, organisasi.nama, pengguna.id, pengguna.nama FROM organisasi, pengguna WHERE pengguna.id = ? AND organisasi.id = ?";

        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ii", $id_pengguna, $id_organisasi);

        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
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
