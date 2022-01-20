<?php require("../admin/connect.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      
.content-table{
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 1.5rem;
    border-radius: 5px 5px 0 0;
    min-width: 400px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0,0,0,0.15);
    margin-top: 200px;
    margin-left: auto;
    margin-right: auto;
}

.content-table thead tr{
    background-color: #009879;
    color: #fff;
    text-align: left;
    height: 100px;
}
.content-table th,
.content-table td{
    padding: 12px 15px;
}

.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
    height: 100px;
}

.content-table tbody tr:nth-of-type(even){
    border-bottom: 2px solid #009879;
}

.content-table td:hover{
    font-weight: bold;
    color: #009879;
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
            <a class="nav-link" href="login.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
                include '../admin/connect.php';
                $rollno=$_GET['rollno'];
                $qry = mysqli_query($conn,"select * from result where rollno='$rollno'");
                $data = mysqli_fetch_array($qry);
                if($data==null){
                    header("location:login.php?error=No such student");
                    exit();
                }else{
                    ?>
                    <table class="content-table">
  
  <thead>
    <tr>
      <th>Roll no</th>
      <th>English</th>
      <th>Marathi</th>
      <th>Hindi</th>
      <th>Maths</th>
      <th>Science</th>
      <th>Social Science</th>
      <th>Percentage</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>
    

    <tr>
      <td> <?php echo $data['rollno']; ?> </td>
      <td> <?php echo $data['english']; ?> </td>
      <td> <?php echo $data['marathi']; ?> </td>
      <td> <?php echo $data['hindi']; ?> </td>
      <td> <?php echo $data['maths']; ?> </td>
      <td> <?php echo $data['science']; ?> </td>
      <td> <?php echo $data['socialscience']; ?> </td>
      <td> <?php echo $data['percentage']; ?> </td>
      <td> <?php echo $data['result']; ?> </td>
    </tr>
  </tbody>
</table>
                    <?php
                }
                ?>
  
</body>
</html>


