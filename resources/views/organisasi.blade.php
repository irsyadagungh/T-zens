<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style5.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Document</title>
</head>
<style>
    .liked {
        color: red;
    }
</style>

<body>

    <nav>
        <div>
            <img src="{{ asset('assets/pics/tzens-untexted.png') }}" alt="">
            <h4>T-Zens</h4>
        </div>

        <ul>
            <li onclick="window.location.href='{{ url('/') }}'">Home</li>
            <li class="active" onclick="window.location.href='{{ url('/acara') }}'">Acara</li>
            <li onclick="window.location.href='{{ url('/organisasi') }}'">Organisasi</li>
            <li onclick="window.location.href='{{ url('/kontak') }}'">Kontak</li>
            @if  ( \Illuminate\Support\Facades\Session::has('success2'))
                <li><a href="{{ route('logout') }}" class="button daftar">Logout</a></li>
            @else
             <li><button class="button daftar" onclick="window.location.href='{{ url('/sign-up') }}'">Daftar</button></li>
            @endif

        </ul>
    </nav>


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

    $query = mysqli_query($conn, 'SELECT * FROM organisasi');

    if (!$query) {
        die('Query error: ' . mysqli_error($conn));
    }
?>




    <div class="beranda">
        <div class="col-1">
            <h2 class="judul" name="judul beranda">Apa itu Organisasi ?</h2>
            <p class="isi1" name="isi beranda">Organisasi ialah merupakan salah satu perkumpulan orang-orang yang telah di bentuk dalam sebuah kelompok yang mana kelompok atau organisasi ini bertugas untuk saling bekerjasama demi menggapai keberhasilan dan tujuan bersama.

                Arti dari kata organisasi ini adalah bentuk pembagian kerja antar sekelompok orang yang melakukan kerja sama dengan cara tertentu untuk menggapai tujuan dan cita-cita bersama-sama.</p>
        </div>
        <img src="/assets/pics/organ.png" alt="" class="foto1">
    </div>
    <div class="bungkus">
        <?php while ($organisasi = mysqli_fetch_assoc($query)):

            $foto = "/assets/pictures/".$organisasi['foto'];
?>
        <div class="kolom" >
            <img src="/assets/pictures/<?php echo $organisasi['foto']; ?>" alt="" class="gmbr1" name="foto organisasi">
            <h3 class="cont" name="judul"> {{ $organisasi['nama'] }}</a> </h3>

            <div class="like">

                <form action="/organisasi/detil-organisasi">
                    <button class="button" type="submit" class="edit" name="lihat" value="{{ $organisasi['id'] }}">Lihat</button>
                </form>
            </div>
        </div>
        <?php endwhile; ?>
    </div>


    <script>
        var icon = document.querySelector(".fa-heart");
        icon.addEventListener("click", function() {
            icon.classList.toggle("liked");
        });
        </script>
</body>

</html>
