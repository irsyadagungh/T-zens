<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style4.css">
    <title>Tzens - Sign in</title>
</head>

<body>
    <!-- <img src="../assets/pics/shape4.png" alt="Ellipse 23" class="ellipse-23"> -->
    <div class="background">
        <img class="img" src="../assets/pics/duduk.png" alt="" width="200px" height="">
        <div class="shape"></div>
        <h2 class="welcome">Welcome to T-Zens</h2>
        <p class="sign">SIGN UP</p>
        <div class="done">
            <form action="/sign-up/add" method="post">
                <img src="/assets/pics/bulet.png" alt="" class="bulet">
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
                    <input class="belakang" name="username">
                </div>
                <div class="inputan2">
                    <p>Username :</p>
                </div>

                <!-- Kolom 3 -->
                <div class="kolom3">
                    <input class="tengah" name="nama">
                </div>
                <div class="inputan3">
                    <p>Nama :</p>
                </div>

                <!-- Kolom 4 -->
                <div class="kolom4">
                    <input class="bawah" name="prodi">
                </div>
                <div class="inputan4">
                    <p>Prodi :</p>
                </div>

                <!-- Kolom 5 -->
                <div class="kolom5">
                    <select name="fakultas" id="">
                        <option value="#">Pilih Fakultas</option>
                        <option value="Fakultas Informatika">Fakultas Informatika</option>
                        <option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
                        <option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
                        <option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
                        <option value="Fakultas Komunikasi dan Bisnis">Fakultas Komunikasi dan Bisnis</option>
                        <option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
                    </select>
                </div>
                <div class="inputan5">
                    <p>Fakultas :</p>
                </div>

                <!-- Kolom 6 -->
                <div class="kolom6">
                    <input class="bawah2" name="no_tlp">
                </div>
                <div class="inputan6">
                    <p>No Telepon :</p>
                </div>

                <!-- Kolom 7 -->
                <div class="kolom7">
                    <input class="bawah3" type="email" name="email">
                </div>
                <div class="inputan7">
                    <p>Email :</p>
                </div>

                <!-- Kolom 8 -->
                <div class="kolom8">
                    <input class="bawah4" type="password" name="password">
                </div>
                <div class="inputan8">
                    <p>Password :</p>
                </div>


                <div class="checkbox">
                    <input type="checkbox">
                </div>

                <div class="lisensi">
                    <p>Saya menyetujui <a href=""> kebijakan kebijakan </a> yang telah dibuat.</p>
                </div>
                <div class="memiliki">
                    <p><a href="/login/view"> Sudah memiliki Akun? </a></p>
                </div>
                <div class="lisensi2">
                    <p class="policy">By clicking “Sign up” button, you are creating a T-Zens account, and you agree to
                        T.Z ens <a href="">
                            Terms of Use </a> and <a href=""> Privacy Policy.</a></p>
                </div>

                <input type="submit" class="button" name="submit" value="Daftar">


            </form>

        </div>
    </div>
</body>

</html>
