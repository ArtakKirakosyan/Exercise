<?php
	require('../conn.php');
	if(isset($_POST['file_upload'])){
		if(!empty($_FILES['file']['name'])){
			$allowed_formats = ['csv'];
			$array = explode('.',$_FILES['file']['name']);
			$format = end($array);
			if(in_array(strtolower($format),$allowed_formats)){
				$file_name = $_FILES['file']['name'];
				$upload = move_uploaded_file($_FILES['file']['tmp_name'],'../uploads/'.$file_name);
				if($upload){			
					$file = fopen('../uploads/'.$file_name,"r");				
					$url ='../uploads/'.$file_name;
					$csv = array();
					$tbl = '';
					$row = fgetcsv($file);
					$tbl=implode(',',$row);
					$insert = mysqli_query($con,"insert into csv_file(names)values('$tbl')");
					for ($i = 0; $i<count($row); $i++) {
						
						$csv[] = fgetcsv($file);
						
						$col_1 = $csv[$i][1];
						$col_2 = $csv[$i][2];
						$col_3 = $csv[$i][3];
						$col_4 = $csv[$i][4];
						$col_5 = $csv[$i][5];
						$col_6 = $csv[$i][6];
						$col_7 = $csv[$i][7];
						$col_8 = $csv[$i][8];
						$col_9 = $csv[$i][9];
						
						$insert = mysqli_query($con,"insert into csv (col_1,col_2,col_3,col_4,col_5,col_6,col_7,col_8,col_9) values ('$col_1','$col_2','$col_3','$col_4','$col_5','$col_6','$col_7','$col_8','$col_9')");
						
						}
						

					}
					echo 1;
			}
			else{
				echo 0;
				}
	}else{
		echo 2;
		}

}