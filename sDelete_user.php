<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

  require ('sConn.php');

	$cId = $_GET['id'];
	$delete = mysqli_query($con, "delete from class110618 where customer_id = '$cId' ");
	header('location: clients.php');
?>