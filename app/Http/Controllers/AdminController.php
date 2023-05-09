<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        session_start();

        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "tzens";

        $conn = mysqli_connect($server, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_POST['acara'])) {
            $nama = $_POST['nama'];
            $foto = $_FILES['foto']['nama'];

        }
    }
}