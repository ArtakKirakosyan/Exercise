<?php
	session_start();
	require('../conn.php');
	$user = $_SESSION['user'];
	$email = $user->emailAddress;
		$search_result = [];
	if(isset($_POST['val'])){
		$val = explode(' ', trim($_POST['val']));
			if(count($val) == 1){
				$val = $val[0];
				$query = mysqli_query($con,"SELECT * FROM users WHERE first_name LIKE '$val%' OR last_name LIKE '$val%' OR keywords Like '$val%'");
				}else if(count($val) > 1){
					 $first_name = $val[0];
					 unset($val[0]);
					 $last_name = implode(' ', $val);
					 
					 $query = mysqli_query($con,"SELECT * FROM users WHERE (first_name LIKE '$first_name%' AND last_name LIKE '$last_name%') OR (first_name LIKE '$last_name%' AND last_name LIKE '$first_name%') ");
					 
					
					 
					 }
	  
					while($result = mysqli_fetch_assoc($query)){
						$search_result[]= $result;
						}
						if(count($search_result)!=0 ){
						echo json_encode($search_result);
						}else{
							echo 0;
							}
	
	}else{
		echo '2';
	}
	
?>
 
		