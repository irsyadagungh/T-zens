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

        // $id = $_POST['id'];

        // function upload()
        // {


        //     $namaFoto = $_FILES['foto']['nama'];
        //     $tmpName = $_FILES['foto']['tmp_name'];
        //     $typeFile = $_FILES['foto']['type'];
        //     $ukuranFile = $_FILES['foto']['size'];
        //     $error = $_FILES['foto']['error'];

        //     // check apakah gambar diupload atau tidak
        //     if ($error === 4) {
        //         echo "<script>
        //     alert('Pilih gambar terlebih dahulu');
        //     </script>";
        //         return false;
        //     }

        //     // validasi ekstensi
        //     $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        //     if (!in_array($typeFile, $ekstensiGambarValid)) {
        //         echo "<script>
        //     alert('Yang anda upload bukan gambar');
        //     </script>";
        //         return false;

        //     }

        //     // cek ukuran file
        //     if ($ukuranFile > 2000000) {
        //         echo "<script>
        //     alert('File yang anda upload terlalu besar');
        //     </script>";
        //         return false;

        //     }


        //     move_uploaded_file($tmpName, '/asstes/pictures/' . $namaFoto);
        //     return $namaFoto;
        // }
        if (isset($_POST['submit'])) {

            $nama = $_POST['nama'];

            $targetDir = "assets/pictures/";
            $gambar = basename($_FILES['foto']['name']);
            $targetFile = $targetDir . $gambar;
            move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile);

            $waktu = $_POST['waktu'];
            $deskripsi = $_POST['deskripsi'];
            $tipeAcara = $_POST['tipe_acara'];
            $benefit = $_POST['benefit'];
            $subs = $_POST['subscribe'];

            $result = mysqli_query($conn, "INSERT INTO `acara` (`id`, `nama`, `foto`, `waktu`, `deskripsi`, `tipe_acara`, `benefit`, `subscription`, `created_at`, `updated_at`)
          VALUES (NULL, '$nama', '$gambar', '$waktu', '$deskripsi', '$tipeAcara', '$benefit', '$subs', NULL, NULL)");

            if ($result) {
                return redirect('/admin/viewAcara');
            } else {
                echo "Error: " . mysqli_error($conn);
            }

        }
    }
}