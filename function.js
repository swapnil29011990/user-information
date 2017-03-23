function user_data(){	
	var fname = $("#fname").val();
	if(fname == ""){
		alert("Please Enter First Name!");
		return false;
	}
	var lname = $("#lname").val();
	if(lname == ""){
		alert("Please Enter Last Name!");
		return false;
	}
	var email = $("#email").val();
	if(email == ""){
		alert("Please Enter Email!");
		return false;
	}	
	var skill = $("#skill").val();
	if(skill == ""){
		alert("Please Enter skill!");
		return false;
	}
	$.ajax({
		type:'POST',
		url:'user_info.php',
		data:$('#info').serialize(),
		success:function(result){ 
		if(result == 1) {
			$.ajax({
				type:'POST',
				url:'user_info.php?data=1',
				success:function(result1){ 
				$("#user_data").html("");
					$("#user_data").html(result1);
					alert("Data Added !!!!");
					$('#info')[0].reset();
				}
			});
		}else {
			alert(result);
		}						
		}
	});	
}