<!DOCTYPE html>
<html>
<head>
<title>login form</title>
<link rel="stylesheet" href="Login.css">
</head>
<body>
<a href="Homepage for business.php">Home</a>
<hr/>
<h2 align="center">CUSTOMER LOGIN FORM</h2>
<form action="login form.php" method="POST" enctype="multipart/form-data">
<div Class="form-group col-md-6">
<label>Username:</label>
<input type ="text" placeholder="Enter username" name="username"required>
<br><br>
<label>Password:</label>
<input type="text" placeholder="Enter password" name="password"required>
<br><br>
<button type="Submit" class="butn" name="login_user">SUBMIT</Button><br><br>
<a href="registration form.php">Don't have an account?Signup.</a>

</body>
</html>

<?php
include ("connection.php");
if(isset($_POST['login_user']))
	
	$username=$_POST['username'];
    $password=$_POST['password'];
	
	$sql="select userid,password from admin where userid='$username' and password='$password'";
	$sql1="select cus_id,password from customer where cus_id='$username' and password='$password'";
	        $r=mysqli_query($con,$sql);
			$r1=mysqli_query($con,$sql1);
			if(mysqli_num_rows($r)>0)
			{
				$_SESSION['user_id']=$username;
				$_SESSION['admin_login_status']="loged in";
				header("location:admin/home.php");
			}
			else if(mysqli_num_rows($r1)>0)
			{
				$_SESSION['user_id']=$username;
				$_SESSION['customer_login_status']="loged in";
			    header("location:customer/home.php");
			}
			else
			{
				echo "<p style='color: red;'>Incorrect userid or password</p>";
			}
				
?>		
		
				
	


