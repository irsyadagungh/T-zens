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
            $nama = $_POST["nama"];
            $password = addslashes(trim($_POST['password']));
            $query = "SELECT status FROM pengguna WHERE username = '$username'";
            $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username'");
            if ($username == null and $password == null) {
                echo "<script>
                        alert('Username dan Password kosong!');
                        window.location.href = '/login/view';
                    </script>";
            } else if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                if (password_verify($password, $row["password"])) {
                    $_SESSION["stat"] = $row["status"];
                    $result2 = mysqli_query($conn, $query);
                    if ($_SESSION["stat"] == 'admin') {
                        Session::put('success', $username);
                        $_SESSION['nama'] = $row['nama'];
                        return redirect('/dashboard/view');
                    } else {
                        Session::put('success2', $username);
                        // jika error disini
                        $_SESSION['id'] = $row['id'];
                        echo "<script>
                    alert('Kamu gk masuk');
                        window.location.href = '/';
                     </script>";

                    }
                } else {
                    echo "<script>
                        alert('Password salah!');
                        window.location.href = '/login/view';
                    </script>";
                }
            } else {
                echo "<script>
                    alert('Username salah!');
                    window.location.href = '/login/view';
                </script>";
            }
        }

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
