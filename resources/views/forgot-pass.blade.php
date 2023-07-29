<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/lupa-password2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
    <title>Tzens - Forgot Password</title>
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

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];

        // Periksa keberadaan email dalam database
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        $_SESSION['reset_email'] = $email;
        // if (mysqli_num_rows($result) > 0) {
        //     // Email ditemukan dalam database
        //     // Lakukan pemrosesan lanjutan
        //     // ...
        //     // Contoh: Kirim email dengan tautan reset password ke alamat email yang ditemukan

        //     // Set session untuk menyimpan email yang akan digunakan pada halaman reset password

        //     // Redirect ke halaman reset password
        //     header("Location: reset-password.php");
        //     exit();
        // } else {
        //     // Email tidak ditemukan dalam database
        //     echo "Email not found.";
        // }
    }
    ?>

    <div class="background">
        <img src="/assets/pics/bulet.png" alt="" class="bulet">
        <img class="img" src="../assets/pics/duduk.png" alt="" width="200px" height="" >
        <div class="shape"></div>
        <h1 class="welcome">Lupa Password</h1>
        <div class="done">
            <form action="/login" method="post">
                @csrf
                <div class="kolom1">
                    <input class="depan" type="email" name="email" placeholder="Masukkan email" required />
                </div>
                <div class="kolom2">
                    <input class="depan" type="password" name="password" placeholder="Masukkan email" required />
                </div>
                <div class="kolom3">
                    <input class="depan" type="password" name="cpassword" placeholder="Masukkan email" required />
                </div>
                <div class="inputan">
                    <p>Email :</p>
                </div>
                <div class="inputan2">
                    <p>New Password :</p>
                </div>
                <div class="inputan3">
                    <p>Confirm Password :</p>
                </div>
                <div class="back" onclick="window.location.href='{{url('/login/view')}}'">
                    <p>Back to sign in</p>
                </div>

                <div class="back back2">
                    <p>Don't have an account?</p>
                </div>
                <button type="submit" class="signup"  name="submit"
                    value="submit">Sign Up</button>

                <button type="submit" class="button" name="forgot" value="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
