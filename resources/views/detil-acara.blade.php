<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&family=Poppins:wght@300;500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/detil-acara.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Detail Acara</title>
</head>

<body>

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

                $query = mysqli_query($conn, 'SELECT * FROM acara');
                $acara = mysqli_fetch_assoc($query);

                if (isset($_GET['lihat'])) {
                 $id = $_GET['lihat'];
                 $query = mysqli_query($conn, "SELECT * FROM acara WHERE id = '$id'");
                $acara = mysqli_fetch_assoc($query);
                }

        ?>
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
            <li><a href="{{ route('logout') }}" class="button2 daftar">Logout</a></li>
            @else
            <li><button class="button3 daftar" onclick="window.location.href='{{ url('/sign-up') }}'">Daftar</button></li>
            @endif

        </ul>
    </nav>
    <section class="atas">

        <div class="main-atas">
            <p class="name-page">Acara / Detail</p>
            <div class="extra-art">
            <p class="judul-acara">{{$acara['nama']}}</p>
        </div>
            <div class="list-benefit">
                <pre>{{$acara['benefit']}}</pre>
            </div>
            <div class="poster">
                <img src="/assets/pictures/<?php echo $acara['foto']; ?>" alt="" class="poster" />
            </div>
            <div class="date">
                <div class="waktu">
                <p class="tanggal">
                    Tanggal:</p>
                   <p> {{$acara['waktu']}}</p>
                </div>
                <div class="jamnya">
                <p class="jam">
                    Waktu:
                </p>
            <p>{{$acara['jam']}}</p>
                </div>
            </div>

            <div class="register">
                @if  ( \Illuminate\Support\Facades\Session::has('success2'))
                <form action="/login/done" method="post">
                    @csrf
                <button name="submit" class="button" value="{{$acara['id']}}">Register Now</button>
            </form>
                @else
                <button class="button" onclick="window.location.href='/login/view'">Register Now</button>
                @endif
            </div>
        </div>
    </section>
    <section class="bawah">
        <div class="shape-left">
                <p class="judul">Detail Acara</p>
                <div class="detail">
                    <span class="material-symbols-outlined">
                        chevron_right
                        </span>
                        <p>Tentang Acara</p>
                    </div>
                    <hr>
                <div class="detail">
                    <span class="material-symbols-outlined">
                        chevron_right
                        </span>
                        <p>Peserta Acara</p>
                    </div>
                    <hr>
            </div>
        <div class="main-bawah">
            <p class="kata-kata" id="deskripsi">
                {{$acara['deskripsi']}}
            </p>
        </div>
    </section>
    <section class="photo-ireng">
        <img src="/assets/pics/v225_11.png" alt="" class="foto-bawah" />
    </section>

</body>

</html>
