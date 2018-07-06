<?php 
	require('conn.php');
	$select = mysqli_query($con,"Select * from csv");
	$tbl = mysqli_query($con,"Select * from csv_file");
	$res = mysqli_fetch_assoc($tbl);
		$columns = explode(',',$res['names']);
		//var_dump($columns);
	
	
	
	?>
 <html>
	<head>
		<link rel ="stylesheet" href = "style/css/bootstrap.min.css">
		<link rel ="stylesheet" href = "style/css/style.css">
	</head>
	<body>
	<div class = 'bg'> </div>
		<div class = 'all_users '>
			<h3 id = 'first'> <?php  echo $columns[0];?></h3>
			<h3 id = 'second'><?php  echo $columns[1];?></h3>
			<h3 id = 'third'><?php  echo $columns[2];?></h3>
			<h3 id = 'fourth'><?php  echo $columns[4];?> </h3>
			<h3 id = 'fifth'><?php  echo $columns[5];?></h3>
			<h3 id ='sixth'><?php  echo $columns[6];?></h3>
		</div>
		<div class = 'info'>
			<?php	while($result = mysqli_fetch_assoc($select)){?>
				<div class = 'id'>
					<h5> <?php echo $result['col_1'] ;?></h5>
				</div>
				<div class = 'name'>
					<h5><?php echo $result['col_2'] ;?></h5>
				</div>
				<div class =  'last_name'>
					<h5><?php echo $result['col_3'] ;?></h5>
				</div>
				<div class =  'user_name' >
					<h5><?php echo $result['col_4'] ;?></h5>
				</div>
				<div class =  'email'>
					<h5><?php echo $result['col_5'] ;?></h5>
				</div>
				<div class =  'phone'>
					<h5><?php echo $result['col_6'] ;?></h5>
				</div>
				
				
			
		<?php } ?>
		</div>
	<?php require('footer.php') ;?>
	</body>
 </html>