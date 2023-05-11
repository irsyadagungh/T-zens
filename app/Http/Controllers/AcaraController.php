<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index()
    {
        session_start();
        $server = 'localhost';
        $username = 'root';
        $pass = '';
        $dbname = 'tzens';

        $conn = mysqli_connect($server, $username, $pass, $dbname);

        if (!$conn) {
            die('Connection failed : ' . mysqli_connect_error());
        }

        $query = mysqli_query($conn, 'SELECT * FROM acara');
        $acara = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return view('acara', ['acara' => $acara]);
    }
}