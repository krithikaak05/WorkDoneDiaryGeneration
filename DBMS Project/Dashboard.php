<?php 
    session_start();
    $conn = new mysqli('localhost','root','','diaryportal');
        if($conn->connect_error){
            die('Connection failed : '. $conn->connect_error);
        }
        else{
            $Username = $_SESSION['Username'];
            $result = mysqli_query($conn,"SELECT * FROM Users where Username=\"$Username\"");
            $conn->close();
        }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css"  href="et.css">
<style>
body {
  font-family: "cursive";
  font-size: 20px;
  background-color: #000000;
}

table {
margin: 8px;
margin-left:100px;
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
font-size: .7em;
color: #ffff00;
border: 1px solid #DDD;
}
.sidebar {
  height: 100%;
  width: 0;
  overflow:auto;
  white-space: nowrap;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}

  

}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times</a>
  <a href="http://localhost/COE.pdf"> Calender of Events </a>
  <a href="http://localhost/Subjects.php"> Subjects </a>
  <a href="http://localhost/WeeklySchedule.php "> Weekly Schedule</a>
  <div class="dropdown-btn"> Lesson Plan
    <i class="fa fa-caret-down"></i>
    </div>
    <div class="dropdown-container">
      <a href="http://localhost/3LessonPlan.php"> 3rd Semester </a>
      <a href="http://localhost/5LessonPlan.php"> 5th Semester </a>
      <a href="http://localhost/7LessonPlan.php"> 7th Semester </a>
    </div>
  <div class="dropdown-btn"> Work Done
  <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container">
    <a href="http://localhost/3WorkDone.php"> 3rd Semester </a>
    <a href="http://localhost/5WorkDone.php"> 5th Semester </a>
    <a href="http://localhost/7WorkDone.php"> 7th Semester </a>
  </div>
  <div class="dropdown-btn">Leaves
  <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container">
    <a href="http://localhost/EnterLeave.php">Enter Details</a>
    <a href="http://localhost/DisplayLeave.php">View Details</a>
  </div>
  <div class="dropdown-btn">Other Activities
  <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container">
    <a href="http://localhost/EnterActivity.php">Enter Details</a>
    <a href="http://localhost/DisplayActivity.php">View Details</a>
  </div>
  <div class="dropdown-btn">Consultancy
  <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container">
    <a href="http://localhost/EnterConsultancy.php">Enter Details</a>
    <a href="http://localhost/DisplayConsultancy.php">View Details</a>
  </div>
  <div class="dropdown-btn">Publications
  <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container">
    <a href="http://localhost/EnterPublication.php">Enter Details</a>
    <a href="http://localhost/DisplayPublication.php">View Details</a>
  </div>
  <div class="dropdown-btn">Projects Guided
  <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container">
    <a href="http://localhost/EnterProject.php">Enter Details</a>
    <a href="http://localhost/DisplayProject.php">View Details</a>
  </div>
  
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">&#9776</button>  

</div> 
<h3> Welcome,
    <?php
        while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>" . $row['FullName'] . "</td>";
        echo "</tr>";
        }
    ?>
</h3>
<?php
    echo "<h2>Today's Schedule</h2>";
    $Username = $_SESSION['Username'];
    $conn = new mysqli('localhost','root','','diaryportal');
        $Day=date("l");
        if($Day=="Monday")
          $WDay="1-Mon";
        else if($Day=="Tuesday")
          $WDay="2-Tues";
        else if($Day=="Wednesday")
          $WDay="3-Wed";
        else if($Day=="Thursday")
          $WDay="4-Thurs";
        else if($Day=="Friday")
          $WDay="5-Fri";
        else if($Day=="Saturday")
          $WDay="6-Sat";
        $result = mysqli_query($conn,"SELECT * FROM weekly_schedule where Username=\"$Username\" and WDay=\"$WDay\"");
    echo "<table>";
    echo "<tr><td>9:00-10:00</td><td>10:00-11:00</td><td>11:15-12:15</td><td>12:15-1:15</td><td>2:00-3:00</td><td>3:00-4:00</td><td>4:00-5:00</td</tr>";
    while($row = mysqli_fetch_array($result))
    {
      echo "<tr><td>" . $row['Lecture1'] . "</td><td>".$row['Lecture2'] . "</td><td>".$row['Lecture3'] . "</td><td>".$row['Lecture4']."</td><td>".$row['Lecture5']."</td><td>".$row['Lecture6']."</td><td>".$row['Lecture7']."</td></tr>";
    }
    echo "</table>";
    echo "<h2>Lesson Plan</h2>";
    $Week=date("W");
    $Week1=$Week-45;
    $Semester=[];
    $Topics=[];
    $result = mysqli_query($conn,"SELECT * FROM lesson_plan where Username=\"$Username\" and (Semester=3 or Semester=5 or Semester=7) and Week=$Week-45 and LDay=\"$WDay\" ");
    echo "<table>";
    echo "<tr><td>Class Taken?<td>Semester</td><td>Topics</td><td>No of students attended</td><td>Remarks</td></tr>";
    $i=0;
    while($row = mysqli_fetch_array($result))
    { 
      $Semester[$i]=$row['Semester'];
      $Topics[$i]=$row['Topics'];
      echo "<form method=\"POST\">
      <tr><td></td><td>
      <div class=\"checkboxes\">
      <input type=\"checkbox\" id=\"check_work_done[]\"name=\"check_work_done[]\" value=\"on\" />
      <input type=\"hidden\" id=\"check_work_done[]\" name=\"check_work_done[]\" value=\"off\" /></div>"
      . $row['Semester'] . "</td><td>".$row['Topics']."</td><td><div class=\"check\"><input type=\"text\" id=\"attendance[]\" name=\"attendance[]\" placeholder=\"Students\" enabled/>
                     </td><td><input type=\"text\" id=\"remarks[]\"name=\"remarks[]\" placeholder=\"Remarks\" enabled /></td></tr>";
      $i++;
    }
    echo "</table>";
    echo "<div class=\"login\">";
    echo "<input type=\"submit\" name =\"submit\" value=\"Submit\"><br>";
    echo "</div>";
    echo "</form>";
    $Attendance=$_POST['attendance'];
    $Remarks=$_POST['remarks'];
    $i=0;

if(isset($_POST['submit']))
{   
  if(empty($_POST['check_work_done']))
  {
    echo "NO";  
  }
  else
  { 
    foreach($_POST['check_work_done'] as $check)
    { 
      if($check=="off")
      {
        $i++;
      }
      else if($check=="on")
      { 
        echo $check;
        echo $Attendance[$i];
        echo $Remarks[$i];
        $stmt = $conn->query("insert into work_done (Username,Semester,Week,WDay,TopicsCovered,NoOfStudents,Remarks) values(\"$Username\",$Semester[$i],$Week1,\"$WDay\",\"$Topics[$i]\",$Attendance[$i],\"$Remarks[$i]\")");
      }

    }
  }
} 
  ?>

<br>                
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
var dropdown = document.getElementsByClassName("dropdown-btn");
                  var i;
                      for (i = 0; i < dropdown.length; i++) {
                            dropdown[i].addEventListener("click", function() {
                              this.classList.toggle("active");
                               var dropdownContent = this.nextElementSibling;
                                if (dropdownContent.style.display === "block") {
                                  dropdownContent.style.display = "none";
                                 } else {
                                   dropdownContent.style.display = "block";
                                   }
                                     });
                                 }
</script>
    <div class="logout">
      <form name="form1" method="post" action="http://localhost/LoginPage.php">
        <input name="submit2" type="submit" id="submit2" value="Log out">
      </form>
    </div>
  </body>
</html> 