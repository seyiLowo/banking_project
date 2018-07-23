<?php 
if(!isset($_SESSION))
    {
        session_start();
    }

require ('sConn.php');

$nfname = $_POST['nfname'];
$nlname = $_POST['nlname'];
$npassword = $_POST['npassword'];
$ncontact = $_POST['ncontact'];

echo mysqli_error($con);

if($nfname!== ''){
			$ufname = mysqli_query($con, "update admin set first_name = '$nfname' where email = '$_SESSION[email]' ");
			echo mysqli_error($con);
}

if($nlname!== ''){
			$ulname = mysqli_query($con, " update admin set last_name = '$nlname' where email = '$_SESSION[email]'  ");
}

if($npassword!== ''){
			$upassword = mysqli_query($con, " update admin set password = '$npassword' where email = '$_SESSION[email]' ");
}

if($ncontact!== ''){
			$ucontact = mysqli_query($con, " update admin set contact = '$ncontact' where email = '$_SESSION[email]' ");
			echo mysqli_error($con);
}
$Mssg = 'Updated!';
include('sDetails.php');

?>