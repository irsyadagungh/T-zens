<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminOrganisasiController extends Controller
{
    public function createOrganisasi()
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

        if (isset($_POST['submit'])) {

            $nama = $_POST['nama'];
            $deskripsi = $_POST['deskripsi'];
            $jadwal = $_POST['jadwal'];
            $judul = $_POST['judul_info'];
            $info = $_POST['info'];

            $targetDir = "assets/pictures/";
            $gambar = basename($_FILES['foto']['name']);
            $targetFile = $targetDir . $gambar;
            move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile);

            $benefit = $_POST['benefit'];

            $result = mysqli_query($conn, "INSERT INTO `organisasi` (`id`, `nama`, `deskripsi`, `jadwal`, `judul_info`, `info`, `benefit`, `foto`, `created_at`, `updated_at`)
            VALUES (NULL, '$nama', '$deskripsi', '$jadwal', '$judul', '$info', '$benefit', '$gambar', NULL, NULL);");

            if ($result) {
                return redirect('/admin/viewOrganisasi');
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}