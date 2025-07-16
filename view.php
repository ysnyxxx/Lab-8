<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>View Records</title>
</head>
<body>
<div class="form">
  <h2>Records List</h2>
  <table border="1" cellpadding="10">
    <tr>
      <th>S.No</th>
      <th>Name</th>
      <th>Age</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    <?php
    $count = 1;
    $sel_query = "SELECT * FROM new_record ORDER BY id DESC LIMIT 10";
    $result = mysqli_query($con, $sel_query);
    while($row = mysqli_fetch_assoc($result)) {
    ?>
      <tr>
        <td><?php echo $count++; ?></td>
        <td><?php echo htmlspecialchars($row["name"]); ?></td>
        <td><?php echo htmlspecialchars($row["age"]); ?></td>
        <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row["id"]; ?>"
               onclick="return confirm('Confirm delete?');">Delete</a></td>
      </tr>
    <?php } ?>
  </table>
  <p><a href="dashboard.php">Back to Dashboard</a></p>
</div>
</body>
</html>
