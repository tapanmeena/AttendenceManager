<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $fname= mysqli_query($db,"select firstname,lastname,username from db_student where username = '$user_check' ");
   #$lname= mysqli_query($db,"select lastname from db_student where username = '$user_check' ");
   $row = mysqli_fetch_array($fname,MYSQLI_ASSOC);
  # $col = mysqli_fetch_array($lname,MYSQLI_ASSOC);
   $login_sessionf= $row['firstname'];
   $login_sessionl= $row['lastname'];
   $user=$row['username'];
   if(!isset($_SESSION['login_user'])){
      header("location:authenticatestudent.php");
   }
?>
