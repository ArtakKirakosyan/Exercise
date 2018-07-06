<?php 




?>
 
 
 
 <html>
	<head>
		<link rel ="stylesheet" href = "style/css/bootstrap.min.css">
		<link rel ="stylesheet" href = "style/css/style.css">
	</head>
	<body>
		<div class = "resume_bg"> </div>
		<div class = 'message'> 
		<h1>In your CSV file the columns must be arranged in this order:</h1>
			<div class = 'order'>
				<h3>1.First Name </h3>
				<h3>2.Last Name </h3>
				<h3>3.User Name </h3>
				<h3>4.Email </h3>
				<h3>5.Phone </h3>
			</div>
		</div>
		<div class ='container resume_upload'> 
			<div class = "cmi"> 
				<input type="file"  class = "file"  >
			</div>
			<h3> Upload your CSV file</h3>
			<button class = 'btn upload' name = 'upload'>Upload</button>
		<div class = "response"></div>
		</div>
	<?php require('footer.php') ;?>
	</body>
 </html>