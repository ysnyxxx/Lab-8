<?php
require('db.php');
include('auth.php');

$id = (int)$_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id=$id";
mysqli_query($con, $query);
header("Location: view.php");
exit();
?>
