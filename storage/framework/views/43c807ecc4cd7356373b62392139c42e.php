<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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

                if (isset($_GET['lihat'])) {
                 $id = $_GET['lihat'];
                 $query = mysqli_query($conn, "SELECT * FROM organisasi WHERE id = '$id'");
                $data = mysqli_fetch_assoc($query);
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
        <?php if( \Illuminate\Support\Facades\Session::has('success2')): ?>
        <li><a href="<?php echo e(route('logout')); ?>" class="button2 daftar">Logout</a></li>
        <?php else: ?>
        <li><button class="button3 daftar" onclick="window.location.href='<?php echo e(url('/sign-up')); ?>'">Daftar</button></li>
        <?php endif; ?>

    </ul>
</nav>
<div class="fott">
<img src="/assets/pictures/<?php echo $data['foto']; ?>" id="chosen-image" class="bg">
</div>
    <section class="sec-2">

        <div class="text" name="isi beranda dalam">
            <p class="judif"><?php echo e($data['judul_info']); ?></p>
            <p><?php echo e($data['info']); ?>

            </p>
        </div>

        <div class="detail">
            <div class="faq">
                <button data-aos="fade-up" data-aos-duration="1000" class="accordion">Apa itu BEM?</button>
                <div class="panel">
                    <p><?php echo e($data['deskripsi']); ?></p>
                    </div>
                </div>
                <div class="faq">
                <button data-aos="fade-up" data-aos-duration="1000" class="accordion">Benefit</button>
                <div class="panel">
                    <p><?php echo e($data['benefit']); ?></p>
                    </div>
                </div>
                <div class="faq">
                <button data-aos="fade-up" data-aos-duration="1000" class="accordion">Kapan jadwal pertemuan</button>
                <div class="panel">
                    <p><?php echo e($data['jadwal']); ?></p>
                    </div>
                </div>
                <?php if( \Illuminate\Support\Facades\Session::has('success2')): ?>
                <form action="/login/done" method="post">
                    <?php echo csrf_field(); ?>
            <button class="button" name="submitt" value="<?php echo e($data['id']); ?>">Register Now</button>
        </form>
            <?php else: ?>
            <button class="button" onclick="window.location.href='/login/view'">Register Now</button>
            <?php endif; ?>

        </section>

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
<?php /**PATH C:\xampp\htdocs\laravel-tugas\T-zens\resources\views/detil-organisasi.blade.php ENDPATH**/ ?>