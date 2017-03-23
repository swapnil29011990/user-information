<?php
	error_reporting(0);
	include("config.php");
	
	if($_REQUEST['data'] == 1) {
		$query = "select * from user_data";
		$result = mysql_query($query);
		$data = "";
		$data = "<tr><th>First name</th><th>Last name</th><th>Email</th><th>Gender</th><th>Education</th><th>Skills</th></tr>";
		while($row = mysql_fetch_array($result)){
			$data .= "<tr><td width='100px' id='fname'>".$row['fname']."</td><td width='100px' id='lname'>".$row['lname']."</td><td width='130px' id='email'>".$row['email']."</td><td width='100px' id='gender'>".$row['gender']."</td><td width='100px' id='edu'>".$row['education']."</td><td width='100px' id='skill'>".$row['skill']."</td></tr>";
		}
		echo $data;
		exit;
	}
	
	
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$email = $_REQUEST['email'];
	$gender = $_REQUEST['gender'];
	$education = $_REQUEST['edu'];
	$skill = $_REQUEST['skill'];
	
	$query = "select count(1) as cnt from user_data where email = '$email'";
	$result = mysql_query($query);
	$res = mysql_fetch_array($result);
	
	if($res['cnt'] == 0){
		$query = "INSERT INTO `user`.`user_data` (`id`, `fname`, `lname`, `email`, `gender`, `education`, `skill`) VALUES (NULL, '$fname', '$lname', '$email', '$gender', '$education', '$skill')";
		$result = mysql_query($query);
		echo "1";
	}else{
		echo 'This Email is already exist!';
		exit;
	}
	
?>