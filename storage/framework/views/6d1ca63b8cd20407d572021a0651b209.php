<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style2.css">
    <title>Document</title>
</head>

<body>
    <img src="../assets/pics/shape3.png" alt="Ellipse 23" class="ellipse-23">
    <div class="background">
        <h2 class="welcome">Welcome to T-Zens</h2>
        <p class="sign">LOG IN</p>
        <div class="done">

        <form action="/login" method="POST">
            <?php echo csrf_field(); ?>
            <!-- Kolom 3 -->
            <div class="kolom3">
                <input class="tengah">
            </div>
            <div class="inputan3">
                <p>Email :</p>
            </div>

            <!-- Kolom 4 -->
            <div class="kolom4">
                <input class="bawah">
            </div>
            <div class="inputan4">
                <p>Password :</p>
            </div>

            <div class="memiliki">
                <p><a href=""> Sudah memiliki Akun? </a></p>
            </div>

            <div class="img">
                <img src="../assets/pics/duduk.png" alt="" width="200px" height="">
            </div>

            <button class="button button2" onclick="window.location.href='<?php echo e(url('/')); ?>'">Daftar</button>
        </form>

        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\applications\T-zens\resources\views//login.blade.php ENDPATH**/ ?>