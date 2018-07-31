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
$accountNumber = $_POST['accountNumber'];
$accountType = $_POST['accountType'];
$staffEmail = $_SESSION['email'];
$date = date("Y-m-d h:i:sa");

$result = mysqli_query($con, "insert into class110618 (first_name,last_name,email,password,phone_number,account_number,account_type,staff_email,creation_date) values('$fname','$lname','$email','$password', '$phoneNumber', '$accountNumber', '$accountType', '$staffEmail', '$date')");
echo mysqli_error($con);
$Mssg = "Account Created! 
		<p><font color='black'>
			<h5>
				<b>Account Number: $accountNumber</b>
			</h5>
		</font></p>";
include('cRegistration2.php');
?>