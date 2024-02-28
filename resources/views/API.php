<?php
session_start();
$server = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'tzens';

$conn = mysqli_connect($server, $username, $pass, $dbname);

if (!$conn) {
    die('Connection failed : ' . mysqli_connect_error());
}
$query = "SELECT acara.nama AS 'Nama Acara', pengguna.nama AS 'Nama User'
                FROM regis_acara JOIN acara ON regis_acara.id_acara = acara.id
                JOIN pengguna ON regis_acara.id_pengguna = pengguna.id";
$query2 = "SELECT organisasi.nama AS 'Nama Organisasi', pengguna.nama AS 'Nama User'
                FROM regis_organisasi
                JOIN organisasi ON regis_organisasi.id_organisasi = organisasi.id
                JOIN pengguna ON regis_organisasi.id_pengguna = pengguna.id";

$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query2);

if (!$result) {
    die('Query error: ' . mysqli_error($conn));
}

//Parameter check
if (!isset($_GET['submit'])) {
    echo 'Error: Category ID (submit) required.';
    exit();
}


//Fetch categories from database
$query = "SELECT acara.nama AS 'Nama Acara', pengguna.nama AS 'Nama User'
                FROM regis_acara JOIN acara ON regis_acara.id_acara = acara.id
                JOIN pengguna ON regis_acara.id_pengguna = pengguna.id WHERE regis_acara.id=" . $_GET['submit'];
$query2 = "SELECT organisasi.nama AS 'Nama Organisasi', pengguna.nama AS 'Nama User'
                FROM regis_organisasi
                JOIN organisasi ON regis_organisasi.id_organisasi = organisasi.id
                JOIN pengguna ON regis_organisasi.id_pengguna = pengguna.id WHERE regis_organisasi.id=" . $_GET['submit'];

$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query2);

//Initialize array variable
$dbdata = array();

//Fetch into associative array
while ($row = mysqli_fetch_assoc($result))  {
    $dbdata[]=$row;
}
while ($row = mysqli_fetch_assoc($result2))  {
    $dbdata[]=$row;
}

//Print array in JSON format
echo json_encode($dbdata);
?>
