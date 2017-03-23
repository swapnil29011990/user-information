<?php
	error_reporting(0);
	include("config.php");
?>
<html>
	<head>
		<title> Add User </title>
		<link type='text/css' rel='stylesheet' href='user.css' />
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="function.js"></script>		
		<script> 
		function load_data() {
		$.ajax({
				type:'POST',
				url:'user_info.php?data=1',
				success:function(result){ 
					$("#user_data").html(result);
					$("#info")[0].reset();			
				}
			});
			}
			</script>
			
	</head>
	<body onload="load_data()">
		<form id="info">
			<div class="form">
				<p><b> Add User </b></p>
				First name:</br>
				<input type="text" id="fname" name="fname" size="30" required></br>
				Last name:</br>
				<input type="text" id="lname" name="lname" size="30" required></br>
				Email:</br>
				<input type="text" id="email" name="email" size="30" required></br>
				Gender:<br>
				<input type="radio" id="m" name="gender" value="male" checked>Male
				<input type="radio" id="f" name="gender" value="female">Female<br>
				Education:<br>
				 <select id="edu" name="edu">
					<option value="BE">BE</option>
					<option value="BSc">BSc</option>
					<option value="BTech">BTech</option>				
				</select>	<br> 
				Skills: <br>
				<textarea rows="2" cols="25" id="skill" name="skill" required></textarea> <br>
				<button type='button' id='submit' onclick="user_data()">Submit</button>			
			</div>
			<div class="info">
				<table id="user_data" border=1  width="400">
					<tr>
						<th>First name</th><th>Last name</th><th>Email</th><th>Gender</th><th>Education</th><th>Skills</th>
					</tr>
					<tr>
						<td width="100px" id="fname"> </td>
						<td width="100px" id="lname"> </td>
						<td width="130px" id="email"> </td>
						<td width="100px" id="gender"> </td>
						<td width="100px" id="edu"> </td>
						<td width="100px" id="skill"> </td>					
					</tr>
				</table>
			</div>
		</form>
	</body>
</html>