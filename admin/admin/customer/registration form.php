<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet"href="signup form.css">
</head>
<body>
<center>
<div class="regform"><h1 align="center">SIGN UP FORM</h1>
<h6 align="center">Please fill all the information correctly</h6>
<a href="Homepage for business.php">HOME</a>

<h3>Personal Information:</h3>
<div class="main">
<form action="registration form.php" method="POST" enctype="multipart/form-data">
<div id="name">
<label>Full Name:</label>
<input class="text" placeholder="Full name" name="fullname"required size="30">
<br><br>
<label>Username:</label>
<input class="text" placeholder="Username" name="username"required size="30">
<br><br><label for="birthday">Date of birth:</label>
<input type="date" id="dob" name="dob">
<br><br>

<Label>Gender:</label>
<select id="gender" name="gender">
  <option>male</option>
  <option>female</option>
  </select>
 <br><br>
 <label>Address:</label>
 <input type="text" id="address" name="address" required size="70">
 <br><br>
 
 <label for="phone">Enter phone number:</label>
<input type="tel" id="mobile" name="mobile" placeholder="0123-456-789"required ><br><br>
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email"><br><br>
<h3>Login Information:</h3>
<label>Username:</label>
<input type="text" placeholder="Enter username" name="username"required size="30"><br><br>
<label>Password:</label>
<input type="text" placeholder="Enter password" name="password" required size="30"><br><br>
<label>Retype password:</label>
<input type="text" placeholder="Retype password" name="password" required size="30"><br><br>

<h3>Photo:</h3>
<div class="file-uplpad-wrapper"data-text="select photo">
  <input name="filename" type="file" class="photo-upload-filled">
  </div> <br>
<input type="checkbox"id="correct information" name="correct information" value="Yeah,all information is absolutely correct">
<label for="correct information">Yeah,all information is absolutely correct</label>
<br>
<input type="checkbox" id="remember" name="remember" valie="Remember me">
<label for="remember">Remember me</label>
<br>
<div class="clearfix">
  <Button>Cancel</button>
  <Button type="Submit" class="butn" name="reg_user">Submit</button>
  
<br><br>
<a href="login form.php">If you have already an account ,please sign in</a>

 
 
</form>
 </center>

</body>
</html>

<?php

include("connection.php");
if(isset($_POST['reg_user']))
{
	//to recieve value from the input fields
	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	//customer id generation
	$num=rand(10,100);
	//echo $num;
	$cus_id="c-".$num;
	
	
    //image upload code
    $ext= explode(".",$_FILES['filename']['name']);
	$c=count($ext);
	$ext=$ext[$c-1];
	$date=date("D:M:Y");
	$time=date("h:i:s");
	echo $date.$time.$cus_id;
	$image_name=md5($date.$time.$cus_id);
	$image=$image_name.".".$ext;
	echo $image;
	
	
	$query="insert into customer values('$cus_id','$fullname','$username','$dob','$gender','$address','$mobile','$email','$password','$image')";
	if(mysqli_query($con,$query))
	{
	   echo "Successfully inserted!";
	   if($image !=null){
		             move_uploaded_file($_FILES['filename']['tmp_name'],"uploadedimage/$image");
	                }
	}
    else	
	{   
        echo "error".mysqli_error($con);
	}
}
?>

	

	
