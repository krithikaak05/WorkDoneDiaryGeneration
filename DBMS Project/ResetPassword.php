<link rel="stylesheet" type="text/css"  href="et.css">
<?php
    $Username=$_POST['username'];
    $Answer1=$_POST['answer1'];
    $Answer2=$_POST['answer2'];
    $Pwd1=$_POST['pwd1'];
    $Pwd2=$_POST['pwd2'];

    $conn = new mysqli('localhost','root','','diaryportal');
        if($conn->connect_error){
            die('Connection failed : '. $conn->connect_error);
        }
        else{
            $result = mysqli_query($conn,"select * from users where Username=\"$Username\" and Answer1=\"$Answer1\" and Answer2=\"$Answer2\"");
            if(mysqli_num_rows($result)==0){
                echo "<h3>Invalid credentials<br>";
                echo "<a href=\"http://localhost/ForgotPassword.php\">Try Again</a></h3>";
            }
            elseif($Pwd1!=$Pwd2){
                echo "<form><h3>Password mismatch!<br>";                
                echo "<a href=\"http://localhost/ForgotPassword.php\">Try Again</a></h3>";
            }
            else{
                $stmt = $conn->query("update users set Password= \"$Pwd1\" where Username=\"$Username\"");
                echo "<h3>Password reset successfully <br>";
                echo "<a href=\"http://localhost/LoginPage.php\">Login here</a></h3>";
            }
            $conn->close();
        }
?>
