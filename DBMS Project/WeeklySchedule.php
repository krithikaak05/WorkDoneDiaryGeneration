<link rel="stylesheet" type="text/css"  href="et.css">
<html>
<head>
<title>Weekly Schedule</title>
<style type="text/css">
   
body{
    background:#000;
}
table {
margin-left: 270px;
margin-top: 100px;
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
    <h3>Weekly Schedule</h3>
<?php
    session_start();
    $conn = new mysqli('localhost','root','','diaryportal');
    if($conn->connect_error){
        die('Connection failed : '. $conn->connect_error);
    }
    else{
        $Username = $_SESSION['Username'];
        $result = mysqli_query($conn,"SELECT * FROM weekly_schedule where Username=\"$Username\"");
        echo "<table>";
        echo "<tr><td>Day</td><td>9:00-10:00</td><td>10:00-11:00</td><td>11:15-12:15</td><td>12:15-1:15</td><td>2:00-3:00</td><td>3:00-4:00</td><td>4:00-5:00</td</tr>";
    while($row = mysqli_fetch_array($result)){
        
    echo "<tr><td>" . $row['WDay'] . "</td><td>" . $row['Lecture1'] . "</td><td>".$row['Lecture2'] . "</td><td>".$row['Lecture3'] . "</td><td>".$row['Lecture4']."</td><td>".$row['Lecture5']."</td><td>".$row['Lecture6']."</td><td>".$row['Lecture7']."</td></tr>";
    }
    
    echo "</table>";
        $conn->close();
    }
?>
</body>
</html>