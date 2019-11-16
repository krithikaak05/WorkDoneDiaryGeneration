<?php 
    session_start();
    $conn = new mysqli('localhost','root','','diaryportal');
        if($conn->connect_error){
            die('Connection failed : '. $conn->connect_error);
        }
        else{
            $Username = $_SESSION['Username'];
        }
?>
<?php
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
    echo "<input type=\"submit\" name =\"submit\" value=\"Submit\"><br>";
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




