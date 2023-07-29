<!doctype html>
<html lang="en">

<head>
  <title>Tzens</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="/assets/css/app.css">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- animation on scroll -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="body">
    <!-- place navbar here -->
    <nav>
        <div>
            <img src="<?php echo e(asset('assets/pics/tzens-untexted.png')); ?>" alt="">
            <h4>T-Zens</h4>
        </div>

        <ul>
            <li onclick="window.location.href='<?php echo e(url('/')); ?>'">Home</li>
            <li class="active" onclick="window.location.href='<?php echo e(url('/acara')); ?>'">Acara</li>
            <li onclick="window.location.href='<?php echo e(url('/organisasi')); ?>'">Organisasi</li>
            <li onclick="window.location.href='<?php echo e(url('/kontak')); ?>'">Kontak</li>
            <?php if( \Illuminate\Support\Facades\Session::has('success2')): ?>
                <li><a href="<?php echo e(route('logout')); ?>" class="button daftar">Logout</a></li>
            <?php else: ?>
             <li><button class="button daftar" onclick="window.location.href='<?php echo e(url('/sign-up')); ?>'">Daftar</button></li>
            <?php endif; ?>

        </ul>
    </nav>
  <main>

    <!-- Section 1 -->
    <section class="home-1">
        <div data-aos="fade-up" data-aos-duration="1000" class="home-1-teks">
            <p class="judul1">Selamat Datang <span class="sess1"><?php echo e(session()->get('success2')); ?></span></p>


            <p class="judul2">Temukan Informasi
            yang Anda inginkan disini!</p>
            <p>Tersedia berbagai macam pilihan informasi yang tersedia didalamnya mengenai Acara, Event, dan Organisasi
            di dunia kampus Telkom University.</p>
            <a href="#3"> <button class="button" >Telusuri</button></a>
        </div>
          <div data-aos="fade-up" data-aos-duration="1800">
              <img class="foto1" src="/assets/pics/pic-landpage.png" alt="">
        </div>
    </section>

    <!-- Section 2 -->
    <section class="home-2">
        <div data-aos="fade-up" data-aos-duration="1000" class="cards">
          <img src="/assets/pics/section2-1.png" alt="" class="circle">
          <p class="card-text"> Pemateri Bersertifikasi</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1250" class="cards">
          <img src="/assets/pics/section2-2.png" alt="" class="circle c2">
          <p class="card-text"> Membuat Dirimu Berkembang</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="cards card3">
          <img src="/assets/pics/section2-3.png" alt="" class="circle c3">
          <p class="card-text"> Pemateri Bersertifikasi</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1750" class="cards">
          <img src="/assets/pics/section2-4.png" alt="" class="circle">
          <p class="card-text"> Mendapatkan Sertifikat</p>
        </div>
    </section>

    <!-- Section 3 -->
    <section class="home-3" id="3">
      <div  class="content sec-3">
        <div data-aos="fade-up" data-aos-duration="1000" class="foto">
          <img class="foto-content-2" src="assets/pics/acara1.png" alt="">
        </div>
        <div data-aos="fade-up" data-aos-duration="1250" class="content-text sec-3">
          <h3>Belajar Fleksibel Ratusan Skill. Dapatkan Sertifikat.</h3>
          <p>Pilih skill apapun dan pelajari kapanpun. Dapatkan video materi terstruktur, modul praktik plus webinar series rancangan
          para experts dari top companies.</p>
          <button class=" button btn-sec-3"  onclick="window.location.href='<?php echo e(url('/acara')); ?>'" >Lihat Ratusan Acara</button>
        </div>
      </div>

      <div class="content sec-3">
        <div data-aos="fade-up" data-aos-duration="1000" class="content-text sec-3">
          <h3>Belajar Fleksibel Ratusan Skill. Dapatkan Sertifikat.</h3>
          <p>Pilih skill apapun dan pelajari kapanpun. Dapatkan video materi terstruktur, modul praktik plus webinar series rancangan
            para experts dari top companies.</p>
            <button class=" button btn-sec-3"  onclick="window.location.href='<?php echo e(url('/organisasi')); ?>'">Lihat Ratusan Organisasi</button>
          </div>
          <div data-aos="fade-up" data-aos-duration="1250" class="foto">
            <img class="foto-content-2" src="assets/pics/acara1.png" alt="">
          </div>
      </div>
    </section>

    <!-- Section 4 -->

    <!-- Section 5 -->
    <section class="home-5">

      <h3 data-aos="fade-up" data-aos-duration="1000">Yang Sering Ditanyakan</h3>

      <div class="faq">
      <button data-aos="fade-up" data-aos-duration="1000" class="accordion">Apa itu T-Zens?</button>
      <div class="panel">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Accusantium aliquid adipisci neque distinctio doloremque corporis
          eveniet debitis vel veritatis consequatur facilis sed suscipit vero iusto at commodi,
          dolor a officiis!</p>
      </div>
      <button data-aos="fade-up" data-aos-duration="1500" class="accordion">Apa itu T-Zens?</button>
      <div class="panel">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Accusantium aliquid adipisci neque distinctio doloremque corporis
          eveniet debitis vel veritatis consequatur facilis sed suscipit vero iusto at commodi,
          dolor a officiis!</p>
      </div>
      <button data-aos="fade-up" data-aos-duration="2000" class="accordion">Apa itu T-Zens?</button>
      <div class="panel">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Accusantium aliquid adipisci neque distinctio doloremque corporis
          eveniet debitis vel veritatis consequatur facilis sed suscipit vero iusto at commodi,
          dolor a officiis!</p>
      </div>
      </div>
    </section>

  </main>
  <footer>
    <!-- place footer here -->
    <div class="col">
      <h3 class="foot-text">T-Zens</h3>
      <p class="text-footer">Kembangkan inovasi dirimu melalui T-Zens</p>
    </div>
    <div class="col">
      <h5 class="foot-text">TZENS.ID</h5>
      <p>Tentang</p>
      <p>Karir</p>
      <p>Kerjasama</p>
      <p>Blog</p>
    </div>
    <div class="col">
      <h5 class="foot-text">Produk</h5>
      <p>Bootcamp & Program</p>
      <p>Mentoring</p>
      <p>Corporate Service</p>
    </div>
    <div class="col">
      <h5 class="foot-text">Lainnya</h5>
      <p>Kebijakan Privasi</p>
    </div>
    <div class="col">
      <img src="" alt="" srcset="">
    </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <!-- animation on scroll library -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

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
<?php /**PATH C:\xampp\htdocs\laravel-tugas\T-zens\resources\views/welcome.blade.php ENDPATH**/ ?>