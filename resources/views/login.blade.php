<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style2.css">
    <title>Tzens - Log in</title>
</head>

<body>
    <!-- <img src="../assets/pics/shape4.png" alt="Ellipse 23" class="ellipse-23"> -->
    <div class="background">
        <img class="img" src="../assets/pics/duduk.png" alt="" width="200px" height="">
        <h2 class="welcome">Welcome to T-Zens</h2>
        <p class="sign">LOG IN</p>
        <div class="done">

            <form action="/login" method="POST">
                <img src="/assets/pics/bulet.png" alt="" class="bulet">
                @csrf
                <!-- Kolom 3 -->
                <div class="kolom3">
                    <input class="tengah" name="username" type="text">
                </div>
                <div class="inputan3">
                    <p>username :</p>
                </div>

                <!-- Kolom 4 -->
                <div class="kolom4">
                    <input class="bawah" name="password" type="password">
                </div>
                <div class="inputan4">
                    <p>Password :</p>
                </div>

                <div class="memiliki2">
                    <p><a href="{{ url('/forgot') }}"> Lupa Password </a></p>
                </div>

                <div class="memiliki">
                    <p><a href="/sign-up"> Belum memiliki Akun? </a></p>
                </div>


                <button class="button button2" name="submit" type="submit">Masuk</button>
            </form>

        </div>
    </div>
</body>

</html>
