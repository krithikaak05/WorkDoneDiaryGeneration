<link rel="stylesheet" type="text/css"  href="et.css">
<html>
<head>
<title>Subjects</title>
<style type="text/css">
   
body{
    background:#000;
}
table {
margin-left: 420px;
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
    <h3>Subjects</h3>
<?php
    $conn = new mysqli('localhost','root','','diaryportal');
    if($conn->connect_error){
        die('Connection failed : '. $conn->connect_error);
    }
    else{
        $result = mysqli_query($conn,"SELECT * FROM Subjects");
        echo "<table>";
        echo "<tr><td>Subject Code</td><td>Subject Name</td><td>Semester</td><td>Credits</td></tr>";
    while($row = mysqli_fetch_array($result)){
        
    echo "<tr><td>" . $row['SubjectCode'] . "</td><td>" . $row['SubjectName'] . "</td><td>".$row['Semester'] . "</td><td>".$row['Credits'] . "</td></tr>";
    }
    
    echo "</table>";
        $conn->close();
    }
?>
</body>
</html>