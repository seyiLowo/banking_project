<?php
require ('conn.php');
$img = $_FILES['files']['name'];
$imgt=$_FILES['files']['tmp_name'];
$move = move_uploaded_file($_FILES['files']['tmp_name'], "uploads/".$img);
// if($move){
echo "your profile pics <img src='uploads/".$img."'>";
// }
// else{
//     echo mysqli_error($con);
// }
// ;
?>