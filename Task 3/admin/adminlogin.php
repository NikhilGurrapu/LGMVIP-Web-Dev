<?php
require("connect.php");

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry = mysqli_query($conn,"select * from admin where username='$username'");
    $data = mysqli_fetch_array($qry);

    $datapwd=$data['password'];
    if($password==$datapwd){
        header("location:adminindex.php");
        echo "<script>alert('Successfully Login....')</script>";
    }else{
        header("location:login.php");
        echo "<script>alert('Incorrect password....')</script>";
    }
}
?>