<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style4.css">
    <title>Document</title>
</head>

<body>
    <img src="../assets/pics/shape3.png" alt="Ellipse 23" class="ellipse-23">
    <div class="background">
        <div class="shape"></div>
        <h2 class="welcome">Welcome to T-Zens</h2>
        <p class="sign">SIGN UP</p>
        <div class="done">
            <form action="/sign-up/add" method="post">
                @csrf
                
                <!-- Kolom 1 -->
                <div class="kolom1">
                    <input class="depan" name="nim">
                </div>
                <div class="inputan">
                    <p>NIM :</p>
                </div>

                <!-- Kolom 2 -->
                <div class="kolom2">
                    <input class="belakang" name="nama">
                </div>
                <div class="inputan2">
                    <p>Nama :</p>
                </div>

                <!-- Kolom 3 -->
                <div class="kolom3">
                    <input class="tengah" name="email">
                </div>
                <div class="inputan3">
                    <p>Email :</p>
                </div>

                <!-- Kolom 4 -->
                <div class="kolom4">
                    <input class="bawah" type="password" name="password">
                </div>
                <div class="inputan4">
                    <p>Password :</p>
                </div>

                <div class="checkbox">
                    <input type="checkbox">
                </div>

                <div class="lisensi">
                    <p>Saya menyetujui <a href=""> kebijakan kebijakan </a> yang telah dibuat.</p>
                </div>
                <div class="memiliki">
                    <p><a href="login.php"> Sudah memiliki Akun? </a></p>
                </div>
                <div class="lisensi2">
                    <p>By clicking “Sign up” button, you are creating a T-Zens account, and you agree to T.Z ens <a
                            href="">
                            Terms of Use </a> and <a href=""> Privacy Policy.</a></p>
                </div>
                <div class="img">
                    <img src="../assets/pics/duduk.png" alt="" width="200px" height="">
                </div>

                <input type="submit" class="button" onclick="window.location.href='done.html'" name="submit"
                    value="Daftar">

               
            </form>

        </div>
    </div>
</body>

</html>