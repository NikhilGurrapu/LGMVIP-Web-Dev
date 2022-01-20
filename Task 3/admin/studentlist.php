<?php require("connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="admin.css" type="text/css">
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="adminindex.php">RESULT</a>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav nav-right">
          <li class="nav-item">
            <a class="nav-link" href="studentlist.php">Student List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
          <table class="content-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Roll no</th>
                  <th>English</th>
                  <th>Marathi</th>
                  <th>Hindi</th>
                  <th>Maths</th>
                  <th>Science</th>
                  <th>Social Science</th>
                  <th>Percentage</th>
                  <th>Result</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'connect.php';
                $selectquery="select * from result";
                $query = mysqli_query($conn, $selectquery);
                $nums = mysqli_num_rows($query);
                while($res = mysqli_fetch_array($query)){
                ?>

                <tr>
                  <td> <?php echo $res['id']; ?> </td>
                  <td> <?php echo $res['rollno']; ?> </td>
                  <td> <?php echo $res['english']; ?> </td>
                  <td> <?php echo $res['marathi']; ?> </td>
                  <td> <?php echo $res['hindi']; ?> </td>
                  <td> <?php echo $res['maths']; ?> </td>
                  <td> <?php echo $res['science']; ?> </td>
                  <td> <?php echo $res['socialscience']; ?> </td>
                  <td> <?php echo $res['percentage']; ?> </td>
                  <td> <?php echo $res['result']; ?> </td>
                  <td><a href="edit.php?id=<?php echo $res['id']; ?>"><i class="las la-edit"></i></a></td>
                  <td><a href="delete.php?id=<?php echo $res['id']; ?>"><i class="las la-trash"></i></a></td>
                </tr>
                <?php } ?>
              </tbody>
          </table>
</body>
</html>