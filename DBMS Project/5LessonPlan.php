<link rel="stylesheet" type="text/css"  href="et.css">
<html>
<head>
<title>5td Sem Lesson Plan</title>
<style type="text/css">
   
body{
    background:#000;
}
table {
margin-left: auto;
margin-right: auto;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
border: 2px solid #DDD;
color:#FFFF00;
}
</style>
</head>
<body>
    <h3>5th Sem Lesson Plan</h3>
<?php
    session_start();
    $conn = new mysqli('localhost','root','','diaryportal');
    if($conn->connect_error){
        die('Connection failed : '. $conn->connect_error);
    }
    else{
        $Username = $_SESSION['Username'];
        $result = mysqli_query($conn,"SELECT * FROM lesson_plan where Username=\"$Username\" and Semester=5");
        echo "<table>";
        echo "<tr><td>Week</td><td>Day</td><td>Topics</td></tr>";
    while($row = mysqli_fetch_array($result)){
        
    echo "<tr><td>" . $row['Week'] . "</td><td>" . $row['LDay'] . "</td><td>".$row['Topics'] . "</td></tr>";
    }
    
    echo "</table>";
        $conn->close();
    }
?>
</body>
</html>