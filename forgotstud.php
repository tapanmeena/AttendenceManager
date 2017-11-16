<?php
include 'config.php';
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$user=$_POST['roll'];
$newpass=$_POST['newpass'];
mysqli_query($db,"UPDATE 160010039_student SET  password='$newpass' WHERE username='$user'");
}
?>
<html>

	<head>
<!--	  <link rel="stylesheet" href="forgotpassword.css">-->
	</head>

	<body>

		<h1> Indian Institute Of Technology Dharwad <br> Library </h1>

		<br>
		<center><h2><font face="bookman">Forgot Password</font></h2></center>
		<br>

		<div class="container">
				<font face="Times">
					<center>
						<form class="floating-box" method="post"><h3><br>
							<label>Roll No.</label><br>
			    		<input type="text" placeholder="Enter Roll No." name="roll" required><br><br>

			    		<label>Name</label><br>
			    		<input type="text" placeholder="Enter Full Name" name="fname" required><br><br>
					
					<label>Password</label><br>
			    		<input type="password" placeholder="Enter new Password" name="newpass" required><br><br>
			    		<button type="submit"><h3>Reset Password</h3></button><br><br>
						</form>
					</center>
				</font>
		</div>
	</body>
</html>


