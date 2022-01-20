<?php

require("connect.php");

if (isset($_POST['submit'])){
    if(!empty($_POST['rollno'])){
        if(!empty($_POST['english'])){
            if(!empty($_POST['marathi'])){
                if(!empty($_POST['hindi'])){
                    if(!empty($_POST['maths'])){
                        if(!empty($_POST['science'])){
                            if(!empty($_POST['socialscience'])){
                                if(!empty($_POST['totalmarks'])){
                                    $rollno=$_POST['rollno'];
                                    $english=$_POST['english'];
                                    $marathi=$_POST['marathi'];
                                    $hindi=$_POST['hindi'];
                                    $maths=$_POST['maths'];
                                    $science=$_POST['science'];
                                    $socialscience=$_POST['socialscience'];
                                    $totalmarks=$_POST['totalmarks'];

                                    $percentage= (($english + $marathi + $hindi + $maths + $science + $socialscience)/$totalmarks)*100;

                                    if($percentage>=35){
                                        $pf='PASS';
                                    }else{
                                        $pf='FAIL';
                                    }

                                    $sql="insert into result(rollno,english,marathi,hindi,maths,science,socialscience,percentage,result) values('$rollno','$english','$marathi','$hindi','$maths','$science','$socialscience','$percentage','$pf')";
                                    
                                    $run=mysqli_query($conn,$sql);
                                    if($run){
                                        header("location: adminindex.php?error=successfully add");
                                        exit();
                                    }else{
                                        header("location: adminindex.php?error=process unsuccesfully");
                                        exit();
                                    }
                                }else{
                                    header("location: adminindex.php?error=totalmarks is requried");
                                    exit();
                                }
                            }else{
                                header("location: adminindex.php?error=socialscience is requried");
                                exit();
                            }
                        }else{
                            header("location: adminindex.php?error=science is requried");
                            exit();
                        }
                    }else{
                        header("location: adminindex.php?error=maths is requried");
                        exit();
                    }
                }else{
                    header("location: adminindex.php?error=hindi is requried");
                    exit();
                }
            }else{
                header("location: adminindex.php?error=marathi is requried");
                exit();
            }
        }else{
            header("location: adminindex.php?error=english is requried");
            exit();
        }
    }else{
        header("location: adminindex.php?error=rollno is requried");
        exit();
    }
}

?>