<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createAcara()
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

            $targetDir = "assets/pictures/";
            $gambar = basename($_FILES['foto']['name']);
            $targetFile = $targetDir . $gambar;
            move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile);

            $waktu = $_POST['tanggal'];
            $jam = $_POST['jam'];
            $deskripsi = $_POST['deskripsi'];
            $tipeAcara = $_POST['tipe_acara'];
            $benefit = $_POST['benefit'];
            $subs = $_POST['subscribe'];

            $result = mysqli_query($conn, "INSERT INTO `acara` (`id`, `nama`, `foto`, `waktu`, `jam`, `deskripsi`, `tipe_acara`, `benefit`, `subscription`, `created_at`, `updated_at`)
          VALUES (NULL, '$nama', '$gambar', '$waktu', '$jam', '$deskripsi', '$tipeAcara', '$benefit', '$subs', NULL, NULL)");

            if ($result) {
                return redirect('/admin/viewAcara');
            } else {
                echo "Error: " . mysqli_error($conn);
            }

        }
    }

    public function editAcara()
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
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $targetDir = "assets/pictures/";
            $gambar = basename($_FILES['foto']['name']);
            $targetFile = $targetDir . $gambar;
            move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile);

            $waktu = $_POST['tanggal'];
            $jam = $_POST['jam'];
            $deskripsi = $_POST['deskripsi'];
            $tipeAcara = $_POST['tipe_acara'];
            $benefit = $_POST['benefit'];
            $subs = $_POST['subscribe'];


            $query = mysqli_query($conn, "UPDATE `acara` SET `nama` = '$nama', `foto` = '$gambar', `waktu` = '$waktu', `jam` = '$jam', `deskripsi` = '$deskripsi', `tipe_acara` = '$tipeAcara', `benefit` = '$benefit', `subscription` = '$subs', `created_at` = NULL, `updated_at` = NULL WHERE `acara`.`id` = $id");
            if ($query) {
                // Jalankan kueri SELECT untuk mendapatkan data acara yang diperbarui
                $selectQuery = mysqli_query($conn, "SELECT * FROM `acara` WHERE `id` = $id");
                $acara = mysqli_fetch_assoc($selectQuery);
                // Lanjutkan penggunaan variabel $acara dengan data yang diperbarui
            } else {
                // Penanganan kesalahan jika UPDATE gagal
            }
        }

        // $_SESSION['id'] = $id;
        // $_SESSION['nama'] = $acara['nama'];
        // $_SESSION['tanggal'] = $acara['waktu'];
        // $_SESSION['jam'] = $acara['jam'];
        // $_SESSION['deskripsi'] = $acara['deskripsi'];
        return redirect('/admin/viewAcara');
    }

    public function editOrganisasi()
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
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $deskripsi = $_POST['deskripsi'];
            $jadwal = $_POST['jadwal'];
            $judul = $_POST['judul_info'];
            $info = $_POST['info'];
            $benefit = $_POST['benefit'];

            $targetDir = "assets/pictures/";
            $gambar = basename($_FILES['foto']['name']);
            $targetFile = $targetDir . $gambar;
            move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile);

            $query = "UPDATE `organisasi` SET `nama` = '$nama',`deskripsi` = '$deskripsi', `jadwal` = '$jadwal', `judul_info` = '$judul', `info` = '$info', `benefit` = '$benefit', `foto` = '$gambar', `created_at` = NULL, `updated_at` = NULL WHERE `organisasi`.`id` = $id";

            $hasil = mysqli_query($conn, $query);
            if ($hasil) {
                // Jalankan kueri SELECT untuk mendapatkan data acara yang diperbarui
                $selectQuery = mysqli_query($conn, "SELECT * FROM `organisasi` WHERE `id` = $id");
                $acara = mysqli_fetch_assoc($selectQuery);
                // Lanjutkan penggunaan variabel $acara dengan data yang diperbarui
            } else {
                // Penanganan kesalahan jika UPDATE gagal
            }


        }
        return redirect('/admin/viewOrganisasi');
    }

    public function editOrgan()
    {
        return view('edit-admin-organisasi');
    }

}
