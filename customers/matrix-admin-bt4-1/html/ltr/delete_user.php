<?php session_start();
	// $delete_mail = $_POST['delete_email'];
	// $fname = $_POST['firstname'];
	// $lname = $_POST['lastname'];
	// $email = $_POST['email'];
	// $password = $_POST['npassword'];
	$nfname = $_POST['nfirstname'];
	// $nlname = $_POST['nlastname'];
	// $nemail = $_POST['nemail'];
	// $npassword = $_POST['npassword'];

$con = mysqli_connect("localhost", "root", "", "class110618");

// $user = mysqli_query($con, "select * from admin where email='$_SESSION["email"]'");

// echo $user;

echo mysqli_error($con);

// $result2 = mysqli_query($con, "select * from admin");




// 	$flag = true;
// 	if($r = mysqli_fetch_array($result2))
// 	{
// 		$delete = mysqli_query($con, "delete * from admin where email = '$_SESSION' ");
// 		echo "User Details Deleted!";
// 		$flag = false;
// 	}
// 	else if($flag)
// 	{
		
// 		echo "User not Found".mysqli_error($con);
// 	}


// if($nfname !== ''){
	// $rfname = mysqli_query($con, "select * from admin ");
	// if($r1 = mysqli_fetch_array($rfname)){
			$ufname = mysqli_query($con, "update admin set first_name = '$nfname' where email = '$_SESSION[email]' ");
			echo "First Name Updated!";
			echo mysqli_error($con);
	// }
	// else{
	// 	echo "Firstname not Found!".mysqli_error($con);
	// }
// }

// else if($lname !== '' && $nlname !== ''){
// 	$rlname = mysqli_query($con, "select * from admin where last_name = '$lname' ");
// 	if($r2 = mysqli_fetch_array($rlname)){
// 			$ulname = mysqli_query($con, " update admin set last_name = '$nlname' WHERE admin.last_name = '$lname' ");
// 			echo "Last Name Updated!";
// 	}
// 	else{
// 		echo "Lastname not Found!".mysqli_error($con);
// 	}
// }


// else if($email !== '' && $nemail !== ''){
// 	$remail = mysqli_query($con, "select * from admin where email = '$email' ");
// 	if($r3 = mysqli_fetch_array($remail)){
// 			$uemail = mysqli_query($con, " update admin set email = '$nemail' WHERE admin.email = '$email' ");
// 			echo "Email Updated!";
// 	}
// 	else{
// 		echo "Email not Found!".mysqli_error($con);
// 	}
// }

// else if($password !== '' && $npassword !== ''){
// 	$rpassword = mysqli_query($con, "select * from admin where password = '$password' ");
// 	if($r2 = mysqli_fetch_array($rpassword)){
// 			$upassword = mysqli_query($con, " update admin set password = '$npassword' WHERE admin.password = '$password' ");
// 			echo "Password Updated!";
// 	}
// 	else{
// 		echo "Password not Found!".mysqli_error($con);
// 	}
// }

// else{
// 	echo "No detail entered!".mysqli_error($con);
// }
?>