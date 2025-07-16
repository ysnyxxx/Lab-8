<?php
require('db.php');
include("auth.php");

$id = (int)$_REQUEST['id'];
$query = "SELECT * FROM new_record WHERE id=$id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

$status = "";
if (isset($_POST['new']) && $_POST['new'] == 1) {
  $trn_date = date("Y-m-d H:i:s");
  $name = $_REQUEST['name'];
  $age = $_REQUEST['age'];
  $submittedby = $_SESSION["username"];
  $update = "UPDATE new_record SET trn_date='$trn_date',
    name='$name', age='$age', submittedby='$submittedby' WHERE id=$id";
  mysqli_query($con, $update);
  $status = "Record Updated Successfully. <br><a href='view.php'>View Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Record</title></head>
<body>
<div class="form">
  <h2>Edit Record</h2>
  <?php if ($status != "") { echo "<p style='color:red;'>$status</p>"; } ?>
  <form method="post">
    <input type="hidden" name="new" value="1">
    <p><input type="text" name="name" value="<?php echo $row['name']; ?>" required></p>
    <p><input type="number" name="age" value="<?php echo $row['age']; ?>" required></p>
    <p><input type="submit" value="Update"></p>
  </form>
  <p><a href="view.php">Back to Records</a></p>
</div>
</body>
</html>
