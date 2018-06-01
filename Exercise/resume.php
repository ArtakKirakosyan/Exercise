<?php
require "init.php";
if (!isset($_SESSION['user'])) {
    header("location: index.php");
}else{
	$user = $_SESSION['user'];
	require('conn.php');
	$email = $user->emailAddress;
	$sel = mysqli_query($con, "select email from users  where email ='$email'");
	$rows = mysqli_num_rows($sel);
	if($rows == '0'){
		$first_name = $user->firstName;
		$last_name = $user->lastName;
	
		$query=mysqli_query($con,"insert into users (first_name,last_name,email,keywords,resume) values ('$first_name','$last_name','$email','','')");
	
	
	}
	
	
	
}



?>
 <head>
		<title> Sign up with LinkedIn</title>
		<link rel ="stylesheet" href = "style/css/bootstrap.min.css">
		<link rel ="stylesheet" href = "style/css/style.css">
	</head>
	<body>
		<div class = "resume_bg"> </div>
		<div class ='container resume_upload'> 
			<div class = "cmi"> 
				<input type="file"  class = "file"  >
			</div>
			<h3> Please Upload Your Resume</h3>
			<button class = 'btn upload' name = 'upload'>Upload</button>
		<div class = "response"></div>
		</div>
	<?php require('footer.php') ;?>
		