

	$('.upload').click(function(){
		$('.response').html('')
		var  file_data = $('.file').prop('files')[0];
		var form_data = new FormData();
		form_data.append('file', file_data);
		form_data.append('file_upload', '');
		$.post({
					cache: false,
					contentType: false,
					processData: false,
					url:'ajax/file_upload.php.',
					data:form_data,
					success:function(res){
							
							if(res ==0){
								$('.response').html("<div class  = 'container error' > <img src = 'style/images/error_warning_alert_attention-512.png'> <h4> Invalid File type. Allowd type are: CSV </h4>")
							}
							
							
							if(res ==1){
							$('.response').html("<div class  = 'container success' > <img src = 'style/images/agt_action_success.png'> <h4> File Uploaded</h4>");
							 setTimeout(function(){ 
								window.location.href = "home.php";
							}, 1000); 
							}
							
							
							if(res == 2){
							$('.response').html ("<div class  = 'container error' > <img src = 'style/images/error_warning_alert_attention-512.png'> <h4> Please Choose a File</h4>")
							}
					}
			})
	})
	
	
	$(document).on('click','.add_keywords',function(){
		$('.error').html('')
		var val = $('.keywords_input').val();
		if(val !== ""){
			$.post({
					url:'ajax/file_upload.php.',
					data:{val},
					dataType:'json',
					success:function(res){
					
					if(res == 1){
						
						$('.resume_upload').append ("<div class  = 'container success' style = 'width:300px;    margin-top: 20px;' > <img src = 'style/images/Green Earth-256x256 (1).png'> <h5> Registration Successfull</h5>")
						 setTimeout(function(){ 
								document.location.href = "http://localhost/exercise/home.php";
							}, 1000); 
						
					}
				}
			})
		}
	})
	
	
	//-----------------search--------------//
	
	
			$('.find_user').click(function(){
				
				var val = $('.search').val();
					if(val !== ''){
						$.post({
						url:'ajax/find_users.php',
						dataType:'json',
						data:{val},
						success:function(res){
							$('.search_result').html(" ");
							if(res ==0){
								$('.search_result').html("<div class = 'err'><h5 class = ''>We couldn't find anything</h5></div>");
							}
							for(i=0; i<res.length; i++){
								$('.search_result').append("<a class = 'go' href = 'guest.php?id="+res[i]['id']+"'><div class ='find'> <h3> "+res[i]['first_name']+"  "+res[i]['last_name']+"</h3></div></a>");
							}
						}
					})
				}
			})
	

	
	
	
	
	
	