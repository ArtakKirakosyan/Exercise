<?php 
  
	require_once("init.php");

 
 ?>
 <html>	
	<head>
		<title> Sign up with LinkedIn</title>
		<link rel ="stylesheet" href = "style/css/bootstrap.min.css">
		<link rel ="stylesheet" href = "style/css/style.css">
	</head>
	<body>
		<div class = "index_bg"> </div>
		<div class = "sign_up">
			<img src = "style/images/linkedin-icon.png">
			<h2> <a href = "
			<?php
			echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; 
			?> "> Sign up with LinkedIn</a></h2>
		</div>
	</body>
 
 
 
 
 
 </html>