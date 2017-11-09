<?php
include('config.php');
 ?>
<?php
if(isset($_POST['sbutton'])){
  $first=$_POST['studentfirstname'];
  $last=$_POST['studentlastname'];
  $id=$_POST['rollnosignup'];
  $password=$_POST['studentsignuppassword'];
  $department=$_POST['department'];
  $semester=$_POST['semester'];
  $query="INSERT INTO `db_student`(`firstname`,`lastname`,`username`,`password`,`department`,`semester`) VALUES ('$first','$last','$id','$password','$department','$semester')";
  $rslt=mysqli_query($db,$query);
  $query="INSERT INTO `db_attendence`(`student_rollno`) VALUES ('$id')";
  $rslt=mysqli_query($db,$query);
  header("location:index.html");
}
?>
