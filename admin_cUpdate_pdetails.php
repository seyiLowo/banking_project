<?php 
if(!isset($_SESSION))
    {
        session_start();
    }

require ('sConn.php');

$nfname = $_POST['nfname'];
$nlname = $_POST['nlname'];
$ncontact = $_POST['ncontact'];
$email = $_POST['email'];


echo mysqli_error($con);

if($nfname!== ''){
			$ufname = mysqli_query($con, "update class110618 set first_name = '$nfname' where email = '$email' ");
			echo mysqli_error($con);
}

if($nlname!== ''){
			$ulname = mysqli_query($con, " update class110618 set last_name = '$nlname' where email = '$email'  ");
}

if($ncontact!== ''){
			$ucontact = mysqli_query($con, " update class110618 set contact = '$ncontact' where email = '$email' ");
			echo mysqli_error($con);
}

$Mssg = 'Updated!';
include('clients.php');

?>