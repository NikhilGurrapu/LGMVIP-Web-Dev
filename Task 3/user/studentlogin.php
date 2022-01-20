<?php

require("../admin/connect.php");

if(isset($_POST['login'])){
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    
    $qry = mysqli_query($conn,"select * from student where rollno='$rollno'");
    $data = mysqli_fetch_array($qry);

    $datapwd=$data['password'];
    if($password==$datapwd){
        header("location:studentindex.php?rollno=$rollno");
        echo "<script>alert('Successfully Login....')</script>";
    }else{
        header("location:login.php");
        echo "<script>alert('Incorrect password....')</script>";
    }
}
?>