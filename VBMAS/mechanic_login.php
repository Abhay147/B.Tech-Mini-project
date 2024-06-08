<?php
session_start();
include "config.php";

if (isset($_POST['Login'])) {
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];

  $select = mysqli_query($con, "SELECT * FROM mechanic_login WHERE Username='$Username' AND Password = '$Password'");
  $row = mysqli_fetch_array($select);

  $status = $row['status'];

  $select2 = mysqli_query($con, "SELECT * FROM mechanic_login WHERE Username='$Username' AND Password = '$Password'");
  $check_user = mysqli_num_rows($select2);

  if ($check_user == 1) {
    $_SESSION["status"] = $status;
    $_SESSION["Username"] = $Username;
    $_SESSION["Password"] = $Password;
  }

  if ($status == "approved") {
    echo '<script type="text/javascript">';
    echo 'alert("Login success!");';
    echo 'window.location.href="mechanic_home.php";';
    echo '</script>';
  } elseif ($status == "pending") {
    echo '<script type="text/javascript">';
    echo 'alert("Your application is still pending for approval!");';
    echo 'window.location.href="mechanic.php";';
    echo '</script>';
  } else {
    echo "Incorrect password or email";
  }
}
?>
