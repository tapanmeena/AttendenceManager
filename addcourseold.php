<?php
#include("userfaculty.php")
include("sessionfaculty.php");
 ?>

 <?php
 if (isset($_POST['saved'])) {

       $subname = $_POST['subject'];
       $semester= $_POST['semester'];
       $teacher=$_SESSION['login_user'];
       #$dbs = new dbs();
       $query="INSERT INTO `subject_table`(`subject_no`, `subject_name`,`teacherusername`, `semester`) VALUES ('','$subname','$teacher','$semester')";
                                                                                  #have to add teacher column here and in table also
      #alert("Course"$subname"Added");
       $rslt=mysqli_query($db,$query);
       #$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     }
  ?>
<html>
    <title>Faculty Portal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body,html{height: 100%}
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    body{
      /*background-image: url("c/images/14.jpg");*/
      background-repeat: no-repeat;
      background-size: cover;
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
    <body class="w3-light-grey" >
    <!--navigation bar-->
      <ul>
        <li style="font-size:20px" ><a class="active" href="welcomefaculty.php"><i class="fa fa-fort-awesome"></i>Attendence Manager</a></li>
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
<a href="welcomefaculty.php">
      <button type="button" class="w3-button w3-hover-blue" name="back"><i class="fa fa-arrow-left"></i>Back</button><!-- Back Button-->
</a>

  <div class="form-container">

      -<form action='' method="post" role="form">
      <div class="container">
      <div class="row" style="margin-left:30%; margin-top:2%;margin-right:30%">
            <div class="col-lg-4">

            <div class="form-group">
              <label for="subject" >Subject's Name </label>
             <select  class="form-control" required id="subject" name="subject" style="text-align:center;" onclick="sort()">
             <option>Select Subject</option>
             <option >Software Systems Lab</option>
             <option >Discrete Structures</option>
             <option >Introduction to Electrical and Electronic Ciruits</option>
             <option >Data Analytics</option>
             <option >Linear Algebra</option>
             <option >Differential Equations</option>
             <option >Network Theory</option>
             <option >Fluid Mechanics</option>
             <option >Solid Mechanics</option>
             <option >Thermodynamics</option>
             <option >Physical Chemistry</option>
             <option >Oraganic Chemistry</option>
             <option >InOrganic Chemistry</option>
             <option >Calculas</option>
             <option >Biology</option>
             </select>
            </div>
            </div>
           </div><!--col-row-->
            </div><!--col-container-->
             <div class="container" style="margin-left:30%;margin-right:30%">

            <div class="col-lg-4" >

            <div class="form-group">
              <label for="semester" >Semester </label>
             <select  class="form-control" style="margin-left:5.7%;"required id="semester" name="semester">
                                                            <!--marginleft for labpc=5.7% and mylaptop=7.8-->
             <option>Select semester</option>
             <option >1st</option>
             <option >2nd</option>
             <option >3rd</option>
             <option >4th</option>
             <option >5th</option>
             <option >6th</option>
             <option >7th</option>
             <option >8th</option>
             </select>
            </div>
            </div>

        </div>
        <div>
          <button type="submit" name="saved" style="margin-left:38%;margin-top:2%">Register</button>
          <button type="reset"name="back">Clear</button>
          </div>

  </form>
 </div><!--form-container-->
<!--<p id="success"></p>
-->
<!--jss script for sorting name in list in add course-->
 <script language="JavaScript" type="text/javascript">
 function sort() {
   var lb=document.getElementById('subject');
   arrTexts=new Array();

   for(i=0;i<lb.length;i++){
     arrTexts[i]=lb.options[i].text;
   }

   arrTexts.sort();

   for(i=0;i<lb.length;i++){
     lb.options[i].text=arrTexts[i];
     lb.options[i].value=arrTexts[i];
   }
 }
</script>
<!--alert not popping UP
<script language="JavaScript" type="text/javaScript">
 function al() {
   var x=document.getElementById('success');
   alert("YES");
 }
 </script>
-->
</body>
</html>
