<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

	require ('sConn.php');

	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phoneNumber = $_POST['phoneNumber'];
	$staffEmail = $_SESSION['email'];
	$date = date("Y-m-d h:i:sa");
	// $epassword = sha1($_POST['password']);


	$result = mysqli_query($con, "insert into admin (first_name,last_name,email,password,contact,created_by,creation_date) values('$fname','$lname','$email','$password', '$phoneNumber', '$staffEmail', '$date')");
	echo mysqli_error($con);

	$Mssg = 'Account Created!';
	include("sRegistration2.php");

?>