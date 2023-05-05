<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/lupa-password2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&display=swap"
      rel="stylesheet"
    />
        <title>Tzens - Forgot Password</title>
  </head>
  <body>

    <div class="background">
        <img src="/assets/pics/bulet.png" alt="" class="bulet">
        <img class="img" src="../assets/pics/duduk.png" alt="" width="200px" height="" >
      <div class="shape"></div>
      <h1 class="welcome">Lupa Password</h1>
      <div class="done">
        <!-- Kolom 1 -->
        <div class="kolom1">
          <input class="depan" />
        </div>
        <div class="inputan">
          <p>Email :</p>
        </div>
        <div class="back">
          <p>Back to sign in</p>
        </div>

         


        <div class="back back2">
          <p>Don't have an account?</p>
        </div>
        <button type="submit" class="signup" onclick="window.location.href='sign.php'" name="submit"
                    value="submit">Sign Up</button>

        <button type="submit" class="button" onclick="window.location.href='{{url('/forgot/login-forgot')}}'" name="submit"
                    value="submit">Submit</button>

       
      </div>
    </div>
  </body>
</html>
