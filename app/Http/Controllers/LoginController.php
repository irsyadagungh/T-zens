<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function add(Request $request)
    {
        // dd($request->except(["_token", "submit"]));
        Pengguna::create($request->except(["_token", "submit"]));
        return redirect('/login/view');
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
            $password = $_POST["password"];
            $query = "SELECT status FROM pengguna WHERE username = '$username'";
            $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username'");
            if ($username == null and $pass == null) {
                echo "<script>
                        alert('Username dan Password kosong!');
                        window.location.href = '/login/view';
                    </script>";
            } else if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                if ($password == $row["password"]) {
                    $_SESSION["stat"] = $row["status"];
                    $result2 = mysqli_query($conn, $query);
                    if ($_SESSION["stat"] == 'admin') {
                        return redirect('/dashboard/view');
                    } else {
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
}
?>
