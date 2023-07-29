
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/lupa-password2.css" />
    <title>Reset Password</title>
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
            <form action="/login" method="post">
                @csrf
                <!-- Kolom 1 -->
                <div class="kolom1">
                    <input class="depan" type="password" name="password" placeholder="Enter New Password" required />
                </div>
                <div class="inputan">
                    <p>Enter New Password:</p>
                </div>

                <!-- Kolom 2 -->
                <div class="kolom2">
                    <input class="belakang" type="password" name="confirm_password" placeholder="Confirm Password"
                        required />
                </div>

                <div class="img">
                    <img src="../assets/pics/duduk.png" alt="" width="200px" height="">
                </div>

                <button type="submit" class="button button2" name="forgot">Update Password</button>
            </form>
        </div>
    </div>
</body>

</html>
