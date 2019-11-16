<?php
    session_start();
    $Username=$_SESSION['Username'];
?>
<link rel="stylesheet" type="text/css"  href="et.css">
<head> 
      <title>Enter Publication</title>
      <body>
        <h3> Enter Publication Details </h3>
         <div class="loginbox1"> 
          <form method="POST" autocomplete="off"> <br>
            <p> Title: </p>
            <input type="text" name="title" placeholder="Your answer" required> <br>
            <p> Short Description: </p>
            <input type="text" name="desc" placeholder="Your answer" required> <br>
            <p> Remarks: </p>
            <input type="text" name="remarks" placeholder="Your answer" required> <br>
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
                $stmt = $conn->prepare("insert into publications(Username,Title,ShortDescription,Remarks) 
                values(?,?,?,?)");
                $stmt->bind_param("ssss",$Username,$_POST['title'],$_POST['desc'],$_POST['remarks']);
                $stmt->execute();
                $stmt->close();
                $conn->close();
            }
        ?>
     </body>
  </head>
</html>