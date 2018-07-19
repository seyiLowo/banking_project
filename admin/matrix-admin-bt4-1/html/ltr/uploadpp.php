<?php
if(!isset($_SESSION))
    {
        session_start();
    }
    
require ('conn.php');
$img = $_FILES['files']['name'];
$imgt=$_FILES['files']['tmp_name'];
$move = move_uploaded_file($_FILES['files']['tmp_name'], "uploads/".$img);

echo "your profile pics <img src='uploads/".$img."'>";

echo mysqli_error($con);
?>