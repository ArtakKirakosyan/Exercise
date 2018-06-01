<?php 
  



   
   
 ?>
 <html>
	<head>
		<link rel ="stylesheet" href = "style/css/bootstrap.min.css">
		<link rel ="stylesheet" href = "style/css/style.css">
	</head>
	<body>
	<div class = "text_"><h1 class = 'text'> Searching People With Name or Surname or only Keyword</h1> </div>
	<div class = "container home_bg"></div>
		<div class = "search_users">
			<input type="text" name="search" placeholder="First name,Last name,Keywords  " class = "search">
			<button type="button" class="btn btn-info find_user" >Search</button>
		</div>
		<div class = "search_result"> </div>
	
	<?php require('footer.php') ;?>
	</body>
 
 
 </html>