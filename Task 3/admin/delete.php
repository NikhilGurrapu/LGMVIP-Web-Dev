<?php
include "connect.php";

$id = $_GET['id'];
$del = mysqli_query($conn,"DELETE FROM `result` WHERE `result`.`id` = $id");

if($del)
{
    mysqli_close($conn);
    header("location:studentlist.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>