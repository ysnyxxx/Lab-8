<?php
require('db.php');
include("auth.php");

$status = "";
if (isset($_POST['new']) && $_POST['new'] == 1) {
  $trn_date = date("Y-m-d H:i:s");
  $name = $_REQUEST['name'];
  $age = $_REQUEST['age'];
  $submittedby = $_SESSION["username"];
  $ins_query = "INSERT INTO new_record (trn_date, name, age, submittedby)
                VALUES ('$trn_date','$name','$age','$submittedby')";
  mysqli_query($con, $ins_query);
  $status = "New Record Inserted Successfully. <br><a href='view.php'>View Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head><title>Insert New Record</title></head>
<body>
  <h2>Insert New Record</h2>
  <form method="post">
    <input type="hidden" name="new" value="1" />
    <p><input type="text" name="name" placeholder="Enter Name" required></p>
    <p><input type="number" name="age" placeholder="Enter Age" required></p>
    <p><input type="submit" value="Submit"></p>
  </form>
  <p style="color:red;"><?php echo $status; ?></p>
  <p><a href="dashboard.php">Return to Dashboard</a></p>
</body>
</html>
