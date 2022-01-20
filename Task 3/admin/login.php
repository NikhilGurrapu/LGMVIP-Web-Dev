<?php require("connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body{
    margin: 0;
    padding: 0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    background: linear-gradient(120deg,#009879,black);
    height: 100vh;
    overflow: hidden;
}

.center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background: white;
    border-radius: 10px;
}

.center h1{
    text-align: center;
    padding: 10px 0 20px 0;
    border-bottom: 1px solid silver;
}

.center form{
    padding: 0 40px;
    box-sizing: border-box;
}
form .txt_field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
}
.txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
}

.txt_field label{
    position: absolute;
    top: 50%;
    left: 70%;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
    transition: .5s;
}

.txt_field span::before{
    content: '';
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    height: 2px;
    background: #269169;
    transition: .5s;
}

.txt_field input:focus~label{
    top: -5px;
    color: #009879;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
    width: 100%;
}

button{
  margin-bottom: 10px;
    width: 50%;
    height: 50px;
    border: 1px solid;
    background: #009879;
    border-radius: 20px;
    font-size: 18px;
    color: #e9f4fe;
    font-weight: 700;
    cursor: pointer;
    outline: none;
    top: 100%;
    left: 100
}
button:hover{
    background: #fff;
    color: #009879;
    border-color: #009879;
    transition: .5s;
    border: 2px solid;
}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RESULT</a>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav nav-right">
        <li class="nav-item">
            <a class="nav-link" href="login.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../user/login.php">Student</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="center">
            <h1>Admin Login</h1>
            <form action="adminlogin.php" method="post">
                <div class="txt_field">
                    <input type="text" name="username" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <button type="submit" name="login">Login</button>
            </form>
        </div>
</body>
</html>
