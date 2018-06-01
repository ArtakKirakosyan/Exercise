<?php
	session_start();
	require('../conn.php');
	$user = $_SESSION['user'];
	$email = $user->emailAddress;
	if(isset($_POST['file_upload'])){
		if(!empty($_FILES['file']['name'])){
				$allowed_formats = ['doc(x)','pdf','txt'];
					$array = explode('.',$_FILES['file']['name']);
					$format = end($array);
					if(in_array(strtolower($format),$allowed_formats)){
						$file_name = $_FILES['file']['name'];
						$insert = mysqli_query($con,"update users set resume = '$file_name' where email = '$email'");
						$upload = move_uploaded_file($_FILES['file']['tmp_name'],'../uploads/'.$file_name);
						echo 1;
						}
							else{
								echo 0;
							}
			
		
		
	 }else{
		 echo 2;
		}
	}
		
		
		 if(isset($_POST['val'])){
			$keywords = trim($_POST['val']);
			$insert = mysqli_query($con,"update users set keywords = '$keywords' where email = '$email'");
			if($insert){
					echo 1;
				}
			}
	