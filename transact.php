<?php
if(!isset($_SESSION))
    {
        session_start();
    }

require ('sConn.php');

$wAmount = $_POST['wAmount'];
$dAmount = $_POST['dAmount'];
$customer_email = $_SESSION['email'];
$date = date("Y-m-d h:i:sa");

$lBalance =  mysqli_query($con, "select * from transactions order by transaction_id desc limit 1");
$lBalance2 = mysqli_fetch_array($lBalance);
$balance = $lBalance2['balance'];

$an =  mysqli_query($con, "select account_number from class110618 where email = '$customer_email' ");
$an2 = mysqli_fetch_array($an);
$aN = $an2['account_number'];



echo mysqli_error($con);

if($wAmount!== ''){
	if($balance !== ''){
		$nBalance = $balance - $wAmount;
		$ndAmount = mysqli_query($con, "insert into transactions (withdrawal, balance, time, customer_email, account_number) values('$wAmount', '$nBalance', '$date', '$customer_email', '$aN')");
		$Mssg = 'Withdrawn!';
		include('transfers.php');
	}
	echo mysqli_error($con);
}

else if($dAmount!== ''){
	if ($balance == ''){
			$ndAmount = mysqli_query($con, "insert into transactions (deposit, balance, time, customer_email, account_number) values('$dAmount', '$dAmount', '$date', '$customer_email', '$aN')");
			$Mssg = 'Deposited!';
			include('transfers.php');
		}

	else{
		
		$nBalance = $balance + $dAmount;
		$ndAmount = mysqli_query($con, "insert into transactions (deposit, balance, time, customer_email, account_number) values('$dAmount', '$nBalance', '$date', '$customer_email', '$aN')");
		$Mssg = 'Deposited!';
		include('transfers.php');
	}
	echo mysqli_error($con);			
}

else {
	$Mssg = 'Enter withdrawal or deposit amount';
	include('transfers.php');
}



?>