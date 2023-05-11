<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/lupa-password2.css" />
    <title>Login Lupa Password</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="background">
        <img src="/assets/pics/bulet.png" alt="" class="bulet">

        <div class="shape"></div>
        <h1 class="welcome">Lupa Password</h1>
        <p class="sign">Log In</p>
        <div class="done">
            <!-- Kolom 1 -->
            <div class="kolom1">
                <input class="depan" />
            </div>
            <div class="inputan">
                <p>Enter New Password:</p>
            </div>

            <!-- Kolom 2 -->
            <div class="kolom2">
                <input class="belakang" />
            </div>
            <div class="inputan2">
                <p>Confirm Password :</p>
            </div>

            <div class="img">
                <img src="../assets/pics/duduk.png" alt="" width="200px" height="">
            </div>


            <button class="button button2" onclick="window.location.href='<?php echo e(url('/login/view')); ?>'">
                Login
            </button>

        </div>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\applications\T-zens\resources\views/login-forgot.blade.php ENDPATH**/ ?>