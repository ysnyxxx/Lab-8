<?php
require_once("connection.php");

if ($_POST['shout'] != "") {
    $result = mysqli_query($link, "INSERT INTO shouts (shout_text) VALUES ('" . $_POST['shout'] . "')") or die(mysqli_error($link));
}
?>

<html>
<head>
  <meta http-equiv="refresh" content="0; url=index.php">
  <title>Redirecting...</title>
</head>
<body>
  <p>Please wait .. (^_^)</p>
</body>
</html>
