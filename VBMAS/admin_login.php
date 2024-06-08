<?php
$username = $_POST['Username'];
$password = $_POST['Password'];

// connect database
$con = new mysqli("localhost", "root", "", "vechicle_db");
if ($con->connect_error) {
  die("failed to connect :" . $con->connect_error);
} else {
  $stmt = $con->prepare("SELECT * FROM admin_login WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt_result = $stmt->get_result();
  if ($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();
    if ($data['Password'] === $password) {
      header("Location: admin_home.php");
    } else {
      echo "Please enter correct details";
    }
  } else {
    echo "Please enter correct details";
  }
}
?>
