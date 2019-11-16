<link rel="stylesheet" type="text/css"  href="et.css">
<?php  
    session_start();
    $_SESSION['Username']=$_POST['Username'];
    $_SESSION['Password']=$_POST['Password'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $conn = new mysqli('localhost','root','','diaryportal');
    $query = mysqli_query($conn,("SELECT * FROM Users where Username = '$Username' AND Password ='$Password'")) 
            or die(mysqli_error($conn)); 
    
    $row = mysqli_fetch_array($query); 
    
    if(!empty($row['Username']) AND !empty($row['Password'])) { 
        $_SESSION['Username'] = $row['Username']; 
        $_SESSION['Password'] = $row['Password'];
        header("Location: http://localhost/Dashboard.php");
}
    
    else { 
            echo "<h3>Sorry. Wrong username and/or Password.<br>";
            echo "<a href=\"http://localhost/LoginPage.php\">Try Again</a></h3>";
    } 
    
?>