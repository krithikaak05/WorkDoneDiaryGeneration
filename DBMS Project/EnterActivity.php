<?php
    session_start();
    $Username=$_SESSION['Username'];
?>
<link rel="stylesheet" type="text/css"  href="et.css">
<head> 
      <title>Enter Activity</title>
      <body>
        <h3> Enter Activity Details </h3>
         <div class="loginbox1"> 
          <form method="POST" autocomplete="off"> <br>
            <p> Position: </p>
            <input type="text" name="position" placeholder="Your answer" required> <br>
            <p> Details of work: </p>
            <input type="text" name="details" placeholder="Your answer" required> <br>
            <p> Duration: </p>
            <input type="text" name="duration" placeholder="Your answer" required> <br>
            <a href="http://localhost/Dashboard.php">Return to dashboard!</a><br>
            <input type="submit" name="" value="Submit">
            </div>
        </form>
        <?php
            $conn = new mysqli('localhost','root','','diaryportal');
            if($conn->connect_error){
                die('Connection failed : '. $conn->connect_error);
            }
            else{
                $stmt = $conn->prepare("insert into other_activities(Username,Position,DetailsOfWork,Duration) 
                values(?,?,?,?)");
                $stmt->bind_param("ssss",$Username,$_POST['position'],$_POST['details'],$_POST['duration']);
                $stmt->execute();
                $stmt->close();
                $conn->close();
            }
        ?>
     </body>
  </head>
</html>