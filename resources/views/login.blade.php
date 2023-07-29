
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style2.css">

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Tzens - Log in</title>
</head>

<body>

    <!-- <img src="../assets/pics/shape4.png" alt="Ellipse 23" class="ellipse-23"> -->
    <div class="background">
        <img class="img" src="../assets/pics/duduk.png" alt="" width="200px" height="">
        <h2 class="welcome">Welcome to T-Zens</h2>
        <p class="sign">LOG IN</p>
        <div class="done">

            <img src="/assets/pics/bulet.png" alt="" class="bulet">
            <form action="/login" method="POST">
                @csrf
                <!-- Kolom 3 -->
                <div class="user">
                    <p>username :</p>
                    <input class="tengah" name="username" type="text" required>
                </div>

                <!-- Kolom 4 -->
                <div class="pass">
                    <p>Password :</p>
                    <div class="p">
                        <input class="bawah" name="password" type="password" id="pass" required>
                        <i class="far fa-eye" id="mata"></i>
                    </div>
                </div>



                <div class="memiliki">
                    <p><a href="/sign-up"> Belum memiliki Akun? </a></p>
                </div>


                <button class="button button2" name="submit" type="submit">Masuk</button>
            </form>

        </div>
    </div>
</body>

<script>
    const togglePassword = document.querySelector('#mata');
    const password = document.querySelector('#pass');

    togglePassword.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>

<script>
    function myFunction() {
        var x = document.getElementById("username").required;
        var x = document.getElementById("password").required;
    }
</script>

</html>
