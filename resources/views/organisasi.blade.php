<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style5.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
        <img src="{{asset('assets/pics/tzens-untexted.png')}}" alt="">
        <h4>T-Zens</h4>
    </div>

    <ul>
        <li onclick="window.location.href='{{ url('/') }}'">Home</li>
        <li class="active" onclick="window.location.href='{{ url('/acara') }}'">Acara</li>
        <li onclick="window.location.href='{{ url('/organisasi') }}'">Organisasi</li>
        <li onclick="window.location.href='{{ url('/kontak') }}'">Kontak</li>
        <li><button class="button daftar" onclick="window.location.href='{{ url('/sign-up') }}'">Daftar</button></li>
    </ul>
</nav>



    <div class="beranda">
        <div class="col-1">
            <h2 class="judul" name="judul beranda">Di BUKA KEMBALI PENDAFTARAN STAF & MAGANG</h2>
            <p class="isi1" name="isi beranda">Halo Warga KEMA Tel-U!
                Telah dibuka kembali pendaftaran STAF BEM KEMA Tel-U 2023. Dan kami membuka pendaftaran STAF MAGANG untuk mahasiswa/i Tel-U angkatan 2022 sebagai kesempatan untuk kamu yang ingin menjadi bagian dari BEM KEMA Tel-U 2023. Tunggu apalagi? Yuk daftarkan dirimu, segera!

                Periode pendaftaran & pengumpulan berkas :  24 Februari - 5 Maret 2023
                Link Pendaftaran: lynk.id/bemtelu</p>
                <button class="btn" onclick="window.location.href='{{url('/organisasi/detil-organisasi')}}'">Lihat</button>
            </div>
            <img src="/assets/pics/BEM.png"  alt="" class="foto1">
        </div>
        <div class="kolom" onclick="window.location.href='{{url('/organisasi/detil-organisasi')}}'">
            <img src="/assets/pics/BEM2.png" alt="" class="gmbr1" name="foto organisasi">
            <h3 class="cont" name="judul"> Open Recruitment BEM KEMA TEL-U 2023</a> </h3>

            <div class="like">

                <span class="material-symbols-outlined icon" name="share" >
                    share
                </span>
                <i class="fa-regular fa-heart icon"></i>
            </div>
            </div>

            <footer> <p class="copyright"> Copyright © 2023 - T-Zens . All Rights Reserved </p> </footer>
            <script>
                var icon = document.querySelector(".fa-heart");
                icon.addEventListener("click", function() {
                  icon.classList.toggle("liked");
                });
              </script>
</body>
</html>
