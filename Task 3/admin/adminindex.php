<?php require("connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
body {
  background-color: #e8edf2;
}

* {
  padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
form{
  padding: 20px;
  border-radius: 20px;
  height: 800px;
}

/* Add padding to containers */
.container {
  margin-top: 50px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=number] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #04AA6D;
  margin-bottom: 25px;
  color: #04AA6D;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: #04AA6D;
  padding: 10px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

label{
  color: #04AA6D;
}
</style>

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
  <form action="addresult.php" method="post">
    <div class="container">
      <h3 style="color: #04AA6D; text-align:center;">Add Marks</h3>
      <label for="Rollno"><b>Roll no</b></label>
      <input type="text" id="Rollno" class="rollno" name="rollno" placeholder="Roll no...">
      <label for="English"><b>English</b></label>
      <input type="number" id="English" class="english" name="english" placeholder="English...">
      <label for="Marathi"><b>Marathi</b></label>
      <input type="number" id="Marathi" class="marathi" name="marathi" placeholder="Marathi...">
      <label for="Hindi"><b>Hindi</b></label>
      <input type="number" id="Hindi" class="hindi" name="hindi" placeholder="Hindi...">
      <label for="Maths"><b>Maths</b></label>
      <input type="number" id="Maths" class="maths" name="maths" placeholder="Maths...">
      <label for="Science"><b>Science</b></label>
      <input type="number" id="Science" class="science" name="science" placeholder="Science...">
      <label for="SocialScience"><b>Social Science</b></label>
      <input type="number" id="SocialScience" class="socialscience" name="socialscience" placeholder="Social Science...">
      <label for="TotalMarks"><b>Total Marks</b></label>
      <input type="number" id="TotalMarks" class="totalmarks" name="totalmarks" placeholder="Total Maximum Marks...">
      <button class="btn btn-success" type="submit" name="submit">Submit</button>
    </div>
  </form>
</body>
</html>


