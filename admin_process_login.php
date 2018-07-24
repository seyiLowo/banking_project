<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

  require ('sConn.php');
	$email = $_POST['email'];
	$password = $_POST['password'];
  $epassword = sha1($_POST['password']);
  $_SESSION['email'] = $email;

	$result = mysqli_query($con, "select * from admin where email = '$email' and password = '$password'");

  // $result = mysqli_query($con, "select * from admin where email = '$email' and password = '$epassword'");

	$flag = true;
	if($r = mysqli_fetch_array($result))
	{
    include('index2.php');
		$flag = false;
	}
	else if($flag)
	{
    $errorMssg = 'Incorrect Email or Password';
		include('sIndex.php');
	}

?>