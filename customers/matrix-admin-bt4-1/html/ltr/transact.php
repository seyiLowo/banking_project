<?php
if(!isset($_SESSION))
    {
        session_start();
    }

require ('conn.php');

$wAmount = $_POST['wAmount'];
$dAmount = $_POST['dAmount'];
$lBalance =  mysqli_query($con, "select balance from transactions order by transaction_id desc limit 1");
$lBalance2 = mysqli_fetch_array($lBalance);
$balance = $lBalance2['balance'];
$customer_email = $_SESSION['email'];
$date = date("Y-m-d h:i:sa");



echo mysqli_error($con);

if($wAmount!== ''){
	if($balance !== ''){
		$nBalance = $balance - $wAmount;
		$ndAmount = mysqli_query($con, "insert into transactions (withdrawal, balance, time, customer_email) values('$wAmount', '$nBalance', '$date', '$customer_email')");
		include('index1.php');
	}
	echo mysqli_error($con);
}

else if($dAmount!== ''){
	if ($balance == ''){
			$ndAmount = mysqli_query($con, "insert into transactions (deposit, balance, time, customer_email) values('$dAmount', '$dAmount', '$date', '$customer_email')");
			include('index1.php');
		}

	else{
		
		$nBalance = $balance + $dAmount;
		$ndAmount = mysqli_query($con, "insert into transactions (deposit, balance, time, customer_email) values('$dAmount', '$nBalance', '$date', '$customer_email')");
		include('index1.php');
	}
	echo mysqli_error($con);			
}

else {
	include('index1.php');
}



?>