<?php require("../admin/connect.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Student login</title>
        <link rel="stylesheet" href="student.css">
        <?php
            if($_GET['error']=='No such student'){
                $error=$_GET['error'];
                echo "<script>alert('$error')</script>";
            }
            if($_GET['process']=='success'){
                echo "<script>alert('Successfully register')</script>";
            }
        ?>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RESULT</a>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav nav-right">
          <li class="nav-item">
            <a class="nav-link" href="../admin/login.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Student Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Student Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        <div class="center">
            <h1>Student Login</h1>
           
            <form method="post" action="studentlogin.php">
                <div class="txt_field">
                    <input type="text" name="rollno" require>
                    <span></span>
                    <label>Roll no</label>
                </div>
                <div class="txt_field">
                    <input type="text" name="name" require>
                    <span></span>
                    <label>Name</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" require>
                    <span></span>
                    <label>Password</label>
                </div>
                <button type="submit" name="login">Login</button>
            </form>
        </div>
    </body>
</html>