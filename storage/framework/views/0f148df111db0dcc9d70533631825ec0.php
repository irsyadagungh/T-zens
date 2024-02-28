<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Acara</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/acara.css">
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
            die('Connection failed: ' . mysqli_connect_error());
        }

        if (isset($_GET['cari'])) {
            $nama = $_GET['search'];
            $nama = trim($nama);
            $query = "SELECT * FROM acara WHERE nama LIKE '%$nama%'";
        } else {
            $query = 'SELECT * FROM acara';
        }
        $hasil = mysqli_query($conn, $query);

        if (!$hasil) {
            die('Query error: ' . mysqli_error($conn));
        }

    ?>

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
            <?php if(\Illuminate\Support\Facades\Session::has('success2')): ?>
                <li><a href="<?php echo e(route('logout')); ?>" class="button daftar">Logout</a></li>
            <?php else: ?>
                <li><button class="button daftar" onclick="window.location.href='<?php echo e(url('/sign-up')); ?>'">Daftar</button></li>
            <?php endif; ?>
        </ul>
    </nav>

    <section class="sec-1">
        <div data-aos="fade-up" data-aos-duration="1000" class="img">
            <h1>Acara</h1>
            <img src="/assets/pics/Saly-10.png" alt="">
        </div>
        <div data-aos="fade-up" data-aos-duration="1250" class="teks">
            <h1>Temukan dan Ikuti acara untuk mengembangkan Bakat Kalian</h1>
            <a href="#acara"><button class="button">Cari Acara</button></a>
        </div>
    </section>

    <section class="sec-2">
        <div data-aos="fade-up" data-aos-duration="1500" class="search">
            <span class="material-symbols-outlined">search</span>
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Search" class="search-2">
                <button type="submit" name="cari" class="searchbut">search</button>
            </form>
        </div>
    </section>

    <section class="sec-3" id="acara">
        
        <?php while ($acara = mysqli_fetch_assoc($hasil)): ?>
            <?php

                $foto = "/assets/pictures/".$acara['foto'];
            ?>
            <div data-aos="fade-up" data-aos-duration="1000" class="card">
                <img src="/assets/pictures/<?php echo $acara['foto']; ?>" alt="Foto" />
                <div class="teks">
                    <h5><?php echo e($acara['nama']); ?></h5>
                    <div class="content-1">
                        <p>waktu</p>
                        <p><?php echo e($acara['waktu']); ?></p>
                    </div>
                    <div class="content-2">
                        <p class="type"><?php echo e($acara['tipe_acara']); ?></p>
                        <p><?php echo e($acara['subscription']); ?></p>
                    </div>
                </div>
                <form action="/acara/detil-acara" >
                    <button class="button" type="submit" class="edit" name="lihat" value="<?php echo e($acara['id']); ?>">Lihat</button>
                </form>
            </div>
        <?php endwhile; ?>
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <script src="" async defer></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel1-tugas\T-zens\resources\views/acara.blade.php ENDPATH**/ ?>