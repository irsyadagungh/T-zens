<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="/assets/css/app.css">


  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="body">
  <header>
    <!-- place navbar here -->
    <nav class="navbar">
       <ul class="list">
        <li class="active">Home</li>
        <li>Acara</li>
        <li>Organisasi</li>
        <li>Kontak</li>
        <li><button class="button daftar" onclick="window.location.href='{{ url('/sign-up/view')}}'">Daftar</button></li>
       </ul>
    </nav>
  </header>
  <main>
    <section class="home-1">
        <div class="home-1-teks">
            <h3>Halo, Selamat Datang.</h3>
            <h2>Temukan Informasi <h2>
            yang Anda inginkan disini!</h4>
            <p>Tersedia berbagai macam pilihan informasi yang tersedia didalamnya mengenai Acara, Event, dan Organisasi
            di dunia kampus Telkom University.</p>
            <button class="button">Telusuri</button>
        </div>
    </section>

    <section class="home-2">
        <div class="cards">
          <img src="/assets/pics/section2-1.png" alt="" class="circle">
          <p class="card-text"> Pemateri Bersertifikasi</p>
        </div>
        <div class="cards">
          <img src="/assets/pics/section2-2.png" alt="" class="circle">
          <p class="card-text"> Membuat Dirimu Berkembang</p>
        </div>
        <div class="cards">
          <img src="/assets/pics/section2-3.png" alt="" class="circle">
          <p class="card-text"> Pemateri Bersertifikasi</p>
        </div>
        <div class="cards">
          <img src="/assets/pics/section2-4.png" alt="" class="circle">
          <p class="card-text"> Mendapatkan Sertifikat</p>
        </div>
    </section>

    <section class="home-3">
      <div class="content sec-3">
        <div class="foto">
          <img class="foto-content-2" src="assets/pics/acara1.png" alt="">
        </div>
        <div class="content-text sec-3">
          <h3>Belajar Fleksibel Ratusan Skill. Dapatkan Sertifikat.</h3>
          <p>Pilih skill apapun dan pelajari kapanpun. Dapatkan video materi terstruktur, modul praktik plus webinar series rancangan
          para experts dari top companies.</p>
          <button class=" button btn-sec-3">Lihat Ratusan Acara</button>
        </div>
      </div>
      
      <div class="content sec-3">
        <div class="content-text sec-3">
          <h3>Belajar Fleksibel Ratusan Skill. Dapatkan Sertifikat.</h3>
          <p>Pilih skill apapun dan pelajari kapanpun. Dapatkan video materi terstruktur, modul praktik plus webinar series rancangan
            para experts dari top companies.</p>
            <button class=" button btn-sec-3">Lihat Ratusan Acara</button>
          </div>
          <div class="foto">
            <img class="foto-content-2" src="assets/pics/acara1.png" alt="">
          </div>
      </div>
    </section>

    section.
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>