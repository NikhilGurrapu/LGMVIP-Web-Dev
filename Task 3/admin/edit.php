<?php
include "connect.php"; // Using database connection file here
$id = $_GET['id']; // get id through query string
$qry = mysqli_query($conn,"select * from result where id='$id'"); // select query
$data = mysqli_fetch_array($qry); // fetch data
if(isset($_POST['update'])) // when click on Update button
{
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
	
    $edit = mysqli_query($conn,"update result set rollno='$rollno', english='$english',marathi='$marathi',hindi='$hindi',maths='$maths',science='$science',socialscience='$socialscience',percentage='$percentage',result='$pf' WHERE id='$id'");
	
    echo $edit;
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:studentlist.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "mysqli_error()";
    }    	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <form method="POST" style="text-align: center; margin-top: 100px;">
                <h1>Update Data</h1>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Rollno</th>
                            <th>English</th>
                            <th>Marathi</th>
                            <th>Hindi</th>
                            <th>Maths</th>
                            <th>Science</th>
                            <th>Social Science</th>
                            <th>Total marks</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="rollno" name="rollno" value="<?php echo $data['rollno'] ?>" placeholder="Roll no..." required></td>
                            <td><input type="number" class="english" name="english" value="<?php echo $data['english'] ?>" placeholder="English..." required></td>
                            <td><input type="number" class="marathi" name="marathi" value="<?php echo $data['marathi'] ?>" placeholder="Marathi..." required></td>
                            <td><input type="number" class="hindi" name="hindi" value="<?php echo $data['hindi'] ?>" placeholder="Hindi..." required></td>
                            <td><input type="number" class="maths" name="maths" value="<?php echo $data['maths'] ?>" placeholder="Maths..." required></td>
                            <td><input type="number" class="science" name="science" value="<?php echo $data['science'] ?>" placeholder="Science..." required></td>
                            <td><input type="number" class="socialscience" name="socialscience" value="<?php echo $data['socialscience'] ?>" placeholder="Social Science..." required></td>
                            <td><input type="number" class="totalmarks" name="totalmarks" placeholder="Total Maximum Marks..." required></td>
                            <td><button class="btn btn-success" name="update">Update</button></td>                            
                        </tr>
                    </tbody>
                </table>
            </form>
</body>
</html>


