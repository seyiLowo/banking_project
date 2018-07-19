<?php  

	require ('conn.php');
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	// $epassword = sha1($_POST['password']);



	if($fname == ''){
		echo "Sorry Information Is Incomplete";
	}

	else{
		// $result = mysqli_query($con, "insert into admin (first_name,last_name,email,password) values('$fname','$lname','$email','$password')");
		$result = mysqli_query($con, "insert into admin (first_name,last_name,email,password) values('$fname','$lname','$email','$password')");
		echo mysqli_error($con);
	}

		include("index.php");

?>