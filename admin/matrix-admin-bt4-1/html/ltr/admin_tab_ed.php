<?php
if(!isset($_SESSION))
{
    session_start();
}

require ('sConn.php');

$customer = mysqli_query($con, "select * from admin");
$uemail =  mysqli_query($con, "select email from admin");

if($delete = mysqli_fetch_array($uemail)){
    $udelete = mysqli_query($con, "delete from admin where email = '$delete'");
    echo "User Details Deleted!";
}
                                            

?>