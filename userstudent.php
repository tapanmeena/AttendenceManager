<?php
include("config.php");
session_start();
$myusername=mysqli_real_escape_string($db,$_POST['rollnologin']);
#$mypassword="1234";#mysqli_real_escape_string($db,$_POST['fpsw']);
$sql="SELECT firstname FROM db_student WHERE username='$myusername'";
$result=mysqli_query($db,$sql);
#$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
#$active=$row['active'];
$count=mysqli_num_rows($result);
echo $myusername;
 ?>
