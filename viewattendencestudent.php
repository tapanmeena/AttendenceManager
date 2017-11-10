<!--can show time and date of student absent or present by making a
seperate table for it and making another table to store total number of
presents and total classes he/she attended
-->


<html>
<link rel="icon" href="images/icon1.png" type="image/icon" />
<title>View Attendence</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<?php
#include('config.php')
include('sessionstudent.php');
?>
<style>
table{
  margin-left:20%;
  margin-right: 20%;
  border-collapse: collapse;
  width:60%;
}
td,td{
  text-align: center;
  padding: 8px;
}
tr:nth-child(even){
  background-color: #f2f2f2
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 8px 16px;
    text-decoration: none;
}
.zzz:hover {
    background-color: purple;
}
.container {
  position: relative;
}
.overlay {
  position: absolute;
  bottom: 0;
  left: 100%;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: 0.5s ease;
}

.container:hover .overlay {
  width: 100%;
  left: 0;
}

.text {
  white-space: nowrap;
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>

<!--For making table for attendence-->
<ul>
  <li style="font-size:20px" ><a class="active" href="welcomestudent.php"><i class="fa fa-fort-awesome" style="font-size:25px"></i>Attendence Manager</a></li>
  <li style="float:right;font-size:18px" class="zzz">
    <div class="container">
    <a><?php echo $login_sessionf," ",$login_sessionl ?> <i class="fa fa-caret-down"></i></a>
      <div class="overlay">
        <div class="text"><a href = "logout.php">Sign Out</a></div>
      </div>
    </div>
  </li>
</ul>

<!--back Button-->
<a href="welcomestudent.php">
      <button type="button" name="back" class="w3-button w3-hover-blue"><i class="fa fa-arrow-left"></i>Back</button><!-- Back Button-->
    </a>


    <table id="t01" style="margin-top:1%">
      <tr>
        <th>Teacher Name</th><th>Course</th><th>Attended</th><th>Total Class</th></tr>

    <?php
    #$rslt=mysqli_query($db,"select id,firstname,lastname,username from db_student");
#  $query=mysqli_query($db,"select courseteaching from db_faculty where username=$user_check");
echo "<br/>";
    #$abc=$user_check;
    $teacher=mysqli_query($db,"select subject_id,attendence,total_classes from db_attendence where student_rollno='$user' ");
    #echo "select student_rollno,subject_id,attendence,total_classes from db_attendence where subject_id=$abc";
    #echo "$user";
    echo "<form action='' method=\"post\">";
    #$rs=mysqli_query($db,"select firstname,lastname from db_student");
  while($row=mysqli_fetch_array($teacher,MYSQLI_ASSOC)){
    #$abc=$row['subject_id'];
    $abc=$row['subject_id'];
    #echo "$abc";
    $rs=mysqli_query($db,"select firstname,lastname from db_faculty where courseteaching='$abc' ");
    $col=mysqli_fetch_array($rs,MYSQLI_ASSOC);
    #echo $col['firstname'];
    echo "<tr>
    <td>".$col['firstname']." ".$col['lastname']."</td>
    <td>".$row['subject_id']."</td>
    <td>".$row['attendence']."</td>
    <td>".$row['total_classes']."</td>
    </tr>";
    }
?>
