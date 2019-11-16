<?php
    session_start();
    $Username=$_SESSION['Username'];
?>
<link rel="stylesheet" type="text/css"  href="et.css">
<head> 
      <title>Enter Project</title>
      <body>
        <h3> Enter Project Details </h3>
         <div class="loginbox1"> 
          <form method="POST" autocomplete="off"> <br>
            <p> Title: </p>
            <input type="text" name="title" placeholder="Your answer" required> <br>
            <p> Degree: </p>
            <input type="text" name="degree" placeholder="Your answer" required> <br>
            <p> Sponsored by: </p>
            <input type="text" name="sponsored_by" placeholder="Your answer" required> <br>
            <a href="http://localhost/Dashboard.php">Return to dashboard!</a><br><br>
            <input type="submit" name="" value="Submit">
            </div>
        </form>
        <?php
            $conn = new mysqli('localhost','root','','diaryportal');
            if($conn->connect_error){
                die('Connection failed : '. $conn->connect_error);
            }
            else{
                $stmt = $conn->prepare("insert into projects_guided(Username,Title,Degree,SponsoredBy) 
                values(?,?,?,?)");
                $stmt->bind_param("ssss",$Username,$_POST['title'],$_POST['degree'],$_POST['sponsored_by']);
                $stmt->execute();
                $stmt->close();
                $conn->close();
            }
        ?>
     </body>
  </head>
</html>