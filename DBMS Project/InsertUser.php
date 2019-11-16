<link rel="stylesheet" type="text/css"  href="et.css">
<?php
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $Fullname = $_POST['fullname'];
    $Age = $_POST['age'];
    $Gender = $_POST['gender'];
    $Answer1 = $_POST['answer1'];
    $Answer2 = $_POST['answer2'];

    $conn = new mysqli('localhost','root','','diaryportal');
        if($conn->connect_error){
            die('Connection failed : '. $conn->connect_error);
        }
        else{
            $stmt = $conn->prepare("insert into users(Username,Password,FullName,Age,Gender,Answer1,Answer2) 
            values(?,?,?,?,?,?,?)");
            $stmt->bind_param("sssisss",$Username,$Password,$Fullname,$Age,$Gender,$Answer1,$Answer2);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        }
?>
<div class="loginbox2">
<h1><c>Registration Successful!</c></h1>
<h1><a href = "http://localhost/LoginPage.php">Click here to login </a></h1>
</div>