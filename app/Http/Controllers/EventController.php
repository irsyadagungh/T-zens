<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class EventController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
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

        $query = "SELECT * FROM acara";
        $result = mysqli_query($conn, $query);
        $_SESSION["hasil"] = $result;
        $acara = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return view('acara', ['acara' => $acara]);
    }
}