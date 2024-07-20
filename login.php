<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login.css">
    <style>
    </style>
</head>
<body>
    
    <section class="images">
        <img src="https://i.imgur.com/LChzsNE.png" alt="Welcome To Fair Sounds">
        <div class="circle"></div>
    </section>
    <main>
        <form method="post" action="login2.0.php" >
            <h1>Sign in</h1>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <a class="fp" href="./fpassword.php" target="blank"><b>Forgot Password?</b></a></p>
            <input type="submit" value="Login" class="btn solid" />
            <p class="signup-link">Don't have an account? <a href="./signup.php" target="blank"><b>Sign up</b></a></p>
        </form>
    </main>
</body>
</html>