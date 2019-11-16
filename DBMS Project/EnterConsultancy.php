<?php
    session_start();
    $Username=$_SESSION['Username'];
?>
<link rel="stylesheet" type="text/css"  href="et.css">
<head> 
      <title>Enter Consultancy</title>
      <body>
        <h3> Enter Consultancy Details </h3>
         <div class="loginbox1"> 
          <form method="POST" autocomplete="off"> <br>
            <p> Industry: </p>
            <input type="text" name="industry" placeholder="Your answer" required> <br>
            <p> Topic: </p>
            <input type="text" name="topic" placeholder="Your answer" required> <br>
            <p> Benefits: </p>
            <input type="text" name="benefits" placeholder="Your answer" required> <br>
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
                $stmt = $conn->prepare("insert into consultancy(Username,Industry,Topic,Benefits) 
                values(?,?,?,?)");
                $stmt->bind_param("ssss",$Username,$_POST['industry'],$_POST['topic'],$_POST['benefits']);
                $stmt->execute();
                $stmt->close();
                $conn->close();
            }
        ?>
     </body>
  </head>
</html>