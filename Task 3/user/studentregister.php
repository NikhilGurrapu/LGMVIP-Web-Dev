<?php

require("../admin/connect.php");

if(isset($_POST['register'])){
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql="insert into student(rollno,name,password) values('$rollno','$name','$password')";
    $qry = mysqli_query($conn,$sql);
    if($qry){
        header("location:login.php?process=success");
        echo "<script>alert('Successfully Login....')</script>";
    }else{
        header("location:register.php");
        echo "<script>alert('Incorrect password....')</script>";
    }
}
?>