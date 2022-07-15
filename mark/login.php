<?php 
    include 'includes/connection.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
   </head>
   <body>
      <div>
         <div>
            <header>Login</header>
            <form action="auth/login_auth.php" method="POST">
               <div>
                  <input type="text" name="email" required placeholder="Email">
               </div>
               <div>
                  <span></span>
                  <input type="password" name="password" required placeholder="Password">
               </div>   
               <div>
                  <input type="submit" name="login_button" name="login_button">
               </div>
            </form>
            <div class="signup">
               Don't have account?
               <a href="register.php">Signup Now</a>
            </div>
         </div>
      </div>
   </body>
</html>