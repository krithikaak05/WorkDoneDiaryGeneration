<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=html, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <head> 
    
  

    <title>Faculty Work Diary Generation</title>
   <link rel="stylesheet" type="text/css"  href="et.css">
    <body>
        

        <h3> Faculty Work Diary </h3>
         <div class="loginbox1"> 
        <img src="http://localhost/logo.jpg" class="box" >
        <br>
        <form action="http://localhost/ValidateUser.php" method="POST">
            <p> Username: </p>
            <input type="text" name="Username" id="Username" placeholder="Enter username" required>
            <p> Password: </p>
            <input type="password" name="Password" id ="Password" placeholder="Enter password" required>
            <a href="http://localhost/ForgotPassword.php">Forgot password? </a>
            <a href="http://localhost/NewUserRegistration.php">New user? Register here. </a><br>
            <input type="submit" name="" value="Login">
        </form>
      </div>
     </body>
  </head>
</html>



