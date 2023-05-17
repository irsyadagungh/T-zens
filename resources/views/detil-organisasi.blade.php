<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style6.css">
    <title>Document</title>
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

                $query = mysqli_query($conn, 'SELECT * FROM organisasi');
                $data= mysqli_fetch_assoc($query);

                if (isset($_GET['klik'])) {
                 $id = $_GET['klik'];
                 $query = mysqli_query($conn, "SELECT * FROM organisasi WHERE id = '$id'");
                $data = mysqli_fetch_assoc($query);
                }

        ?>
    <img src="/assets/pictures/<?php echo $data['foto']; ?>" id="chosen-image" class="bg">
    <section class="sec-2">
        <div class="text" name="isi beranda dalam">
            <p class="judif">{{$data['judul_info']}}</p>
            <p>{{$data['info']}}
            </p>
        </div>
        <div class="detail">
            <div class="faq">
                <button data-aos="fade-up" data-aos-duration="1000" class="accordion">Apa itu BEM?</button>
                <div class="panel">
                    <p>{{$data['deskripsi']}}</p>
                    </div>
                </div>
                <div class="faq">
                <button data-aos="fade-up" data-aos-duration="1000" class="accordion">Benefit</button>
                <div class="panel">
                    <p>{{$data['benefit']}}</p>
                    </div>
                </div>
                <div class="faq">
                <button data-aos="fade-up" data-aos-duration="1000" class="accordion">Kapan jadwal pertemuan</button>
                <div class="panel">
                    <p>{{$data['jadwal']}}</p>
                    </div>
                </div>
            <button class="button" onclick="window.location.href='done.html'">Register Now</button>
    </section>
            <section class="sec-3">
                <div class="rek">
        <h3>Rekomendasi Organisasi Untukmu</h3>
    </div>
    <div class="rekomendasi">
        <div class="card">
        <img src="/assets/pics/HIMA-MBTI.png" alt="" class="mbti" name="foto">
        <h4 class="sub" name="judul">HIMA MBTI</h4>
        </div>
    </div>
    </section>

    <footer>
        <p class="copyright"> Copyright © 2023 - T-Zens . All Rights Reserved </p>
    </footer>
    <!-- JS -->
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
</body>

</html>
