<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $fname= mysqli_query($db,"select firstname,lastname,courseteaching from db_faculty where username = '$user_check' ");
  # $lname=mysqli_query($db,"select lastname from db_faculty where username = '$user_check' ");
   #$ls=mysqli_query($db,"select courseteaching from db_faculty where username='$user_checl' ")
   $row = mysqli_fetch_array($fname,MYSQLI_ASSOC);
  # $col = mysqli_fetch_array($lname,MYSQLI_ASSOC);
   #$c=mysqli_fetch_array($ls,MYSQLI_ASSOC);
   $login_sessionf= $row['firstname'];
   $login_sessionl=$row['lastname'];
   $course=$row['courseteaching'];
   if(!isset($_SESSION['login_user'])){
      header("location:authenticatefaculty.php");
   }
?>
