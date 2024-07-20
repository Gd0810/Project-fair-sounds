<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>
<script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="signup.css">
<style>

</style>
<body>
    <main>
        
        <form method="post" action="signup2.0.php">
            <h1>Sign up</h1>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Username"  required/>
              <span class="text-danger"></span>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email"  required/>
              <span class="text-danger"></span>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <!-- <i id="toggle-password" class="fas fa-eye"></i> -->
              <input type="password" name="password" placeholder="Password"  required/>
             <span class="text-danger"></span>
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="number"name="phnumber" placeholder="Phone number"  required/>
              <span class="text-danger"></span>
    </div>
            </div>
            <input type="submit" value="Sign Up" class="btn solid" />
            <p class="signin-link">Already a Member? <a href="./login.php" target="blank"><b>Sign in</b></a></p>
        </form>
    </main>
    <section class="images">
        <img src="https://i.imgur.com/LChzsNE.png" alt="Mobile">
        <div class="circle"></div>
    </section>
</body>
</html>