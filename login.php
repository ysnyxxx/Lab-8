<?php
require('db.php');
session_start();

if (isset($_POST['username'])) {
    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con, $password);

    $query = "SELECT * FROM users WHERE username='$username' AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br><a href='login.php'>Try Again</a></div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>
<body>
<div class="form">
  <h1>Log In</h1>
  <form method="post" name="login">
    <input type="text" name="username" placeholder="Username" required />
    <input type="password" name="password" placeholder="Password" required />
    <input type="submit" value="Login" />
  </form>
  <p>Not registered yet? <a href="registration.php">Register Here</a></p>
</div>
</body>
</html>
