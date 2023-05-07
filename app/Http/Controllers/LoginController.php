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
            $user = $_POST["username"];
            $password = $_POST["password"];

            $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$user'");

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($password == $row["password"]) {
                    return redirect('/');
                }
            }
            return redirect('/login/view');

        }
    }
}
