<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function add()
    {
        // dd($request->except(["_token", "submit"]));
        // Pengguna::create($request->except(["_token", "submit"]));

        session_start();
        $server = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "tzens";

        $conn = mysqli_connect($server, $username, $pass, $dbname);

        if (!$conn) {
            die("Connection failed : " . mysqli_connect_error());
        }

        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
            $prodi = filter_input(INPUT_POST, 'prodi', FILTER_SANITIZE_STRING);
            $fk = $_POST['fakultas'];
            $tlp = filter_input(INPUT_POST, 'no_tlp', FILTER_SANITIZE_NUMBER_INT);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = addslashes(trim($_POST['password']));
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO `pengguna` (`id`, `nim`, `username`, `nama`, `prodi`, `fakultas`, `no_tlp`, `email`, `password`, `status`, `email_verified_at`, `created_at`, `updated_at`)
            VALUES (NULL, '$nim', '$username', '$nama', '$prodi', '$fk', '$tlp', '$email', '$hash', NULL, NULL, NULL, NULL)";

            $result = mysqli_query($conn, $query);
            return redirect('/login/view');
        }
    }

    public function login()
    {
        session_start();
        $server = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "tzens";

        $conn = mysqli_connect($server, $username, $pass, $dbname);

        if (!$conn) {
            die("Connection failed : " . mysqli_connect_error());
        }

        if (isset($_POST["submit"])) {
            $username = $_POST["username"];
            $password = addslashes(trim($_POST['password']));
            $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username'");

            if (empty($username) || empty($password)) {
                $this->redirectWithMessage('/login/view', 'Username dan Password kosong!');
            }

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);

                if (password_verify($password, $row["password"])) {
                    $_SESSION["stat"] = $row["status"];


                    if ($_SESSION["stat"] == 'admin') {
                        $this->redirectWithMessage('/dashboard/view', 'Login successful', 'success', $username);
                    } else {
                        $this->redirectWithMessage('/', 'Kamu berhasil masuk', 'success', $username);
                    }


                } else {
                    $this->redirectWithMessage('/login', 'Password salah!');
                }
            } else {
                $this->redirectWithMessage('/login', 'Username salah!');
            }
        }


        // FORGOT PASS

        if (isset($_POST["forgot"])) {
            $email = $_POST["email"];
            $currentPassword = $_POST["cpassword"];
            $newPassword = $_POST["password"];

            $result = mysqli_query($conn, "Select * From pengguna WHERE email = '$email'");
            $row = mysqli_fetch_assoc($result);

            if ($currentPassword == $row["password"]) {
                $query2 = "UPDATE pengguna SET password ='$newPassword'  where email='$email' ";
                $hasil = mysqli_query($conn, $query2);
                return redirect('/');
            }

        }
    }

    private function redirectWithMessage($url, $message, $type = 'error', $username = null)
    {
        if ($type == 'success') {
            Session::put('success', $username);
        } elseif ($type == 'success2') {
            Session::put('success2', $username);
        }

        echo "<script>
                alert('$message');
                window.location.href = '$url';
            </script>";
        exit;
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
    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect('/');
    }
    public function isAuthenticated()
    {
        if (Auth::check()) {
            return true;
        } else {
            return false;
        }
    }
}

?>
