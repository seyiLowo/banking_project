<?php
if(!isset($_SESSION))
{
    session_start();
}

require ('sConn.php');
$id = $_GET['id'];
$delete = mysqli_query($con, "delete from admin where admin_id = '$id' ");
header('location: admins.php');
                                       

?>