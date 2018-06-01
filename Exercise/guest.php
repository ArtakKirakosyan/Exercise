<?php
session_start();
require('conn.php');
 $user = $_SESSION['user'];
 if(isset($_GET['id'])){
		$find_user_id = $_GET['id'];
		if(is_numeric($find_user_id)){
			$result = mysqli_query($con,"select * from users where id = '$find_user_id'");
			$fetch = mysqli_fetch_assoc($result);
			
 }
 
 }


?>
 <html>
	<head>
		<link rel ="stylesheet" href = "style/css/bootstrap.min.css">
		<link rel ="stylesheet" href = "style/css/style.css">
	
	</head>
	<body>
	<div class = "container guest_bg">
		<div class = "container find_user_">
			<div class = "profile_image">
				<img src  = 'https://media.licdn.com/dms/image/C5600AQG-dW5wqGmgrQ/profile-originalphoto-shrink_450_600/0?e=1527854400&amp;v=beta&amp;t=tWNko8KVst0uQWjfMGZwqR_pQV6Uk0tmpABwS9VaZcY'>
			</div>
			<div class = "user_first_name">
				<h4> First name:</h4>
				<h3> 
				<?php  echo $fetch['first_name'];?>
				</h3>
				<h4> Last name:</h4>
				<h3> 
				<?php  echo $fetch['last_name'];?>
				</h3>
				<h4> KeyWords:</h4>
				<h3> 
				<?php  echo $fetch['keywords'];?>
				</h3>
				<a  href = "uploads/<?php echo $fetch['resume'];?>"  download class = "btn download" >Download Resume</a >
			</div>
		</div>
	</div>
	<?php require('footer.php') ;?>
	</body>
 </html>