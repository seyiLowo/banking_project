<?php  
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	$con = mysqli_connect("localhost", "root", "", "class110618");

	if($fname == ''){
		echo "Sorry Information Is Incomplete";
	}

	else{
		$result = mysqli_query($con, "insert into class110618 (first_name,last_name,email,password) values('$fname','$lname','$email','$password')");

		echo mysqli_error($con);
	}

	include("index.php");
?>