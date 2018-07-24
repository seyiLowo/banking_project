<?php
if(!isset($_SESSION))
    {
        session_start();
    }

require ('sConn.php');

$amount = $_POST['amount'];
$aNumber = $_POST['aNumber'];
$customer_email = $_SESSION['email'];
$date = date("Y-m-d h:i:sa");

$lBalance =  mysqli_query($con, "select * from transactions where customer_email = '$customer_email' order by transaction_id desc limit 1");
$lBalance2 = mysqli_fetch_array($lBalance);
$balance = $lBalance2['balance'];

$ac =  mysqli_query($con, "select account_number from class110618 where email = '$customer_email' order by customer_id desc limit 1");
$ac2 = mysqli_fetch_array($ac);
$accN = $ac2['account_number'];

$rBalance =  mysqli_query($con, "select * from class110618 where account_number = '$aNumber' order by customer_id desc limit 1");
$rBalance2 = mysqli_fetch_array($rBalance);
$rEmail = $rBalance2['email'];

$r =  mysqli_query($con, "select balance from transactions where account_number = '$aNumber' order by transaction_id desc limit 1");
$r2 = mysqli_fetch_array($r);
$R = $r2['balance'];





echo mysqli_error($con);

if($amount!== ''){
	if($balance !== ''){
		$nBalance = $balance - $amount;
		$sent = mysqli_query($con, "insert into transactions (transfer_amount, balance, time, customer_email, account_number, transfer_to) values('$amount', '$nBalance', '$date', '$customer_email', '$accN', '$aNumber')");

		$nrBalance = $R + $amount;
		$received = mysqli_query($con, "insert into transactions (received_amount, balance, time, customer_email, account_number, received_from) values('$amount', '$nrBalance', '$date', '$rEmail', '$aNumber', '$accN')");
		$tMssg = 'Transfer Successful!';
		include('transfers.php');
	}
	echo mysqli_error($con);
}

else {
	$tMssg = "Enter Transfer Amount or Recepient's Account Number";
	include('transfers.php');
}



?>