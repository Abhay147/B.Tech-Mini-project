<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Connect to the database
  $con = new mysqli("localhost", "root", "", "vechicle_db");
  if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
  } else {
    $stmt = $con->prepare("SELECT * FROM user_login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
      $data = $stmt_result->fetch_assoc();
      if ($data['password'] === $password) {
        // Start a session and set the user's email as a session variable
        session_start();
        $_SESSION['email'] = $email;

        echo '<script type="text/javascript">';
        echo 'alert("Login success!");';
        echo 'window.location.href="user_home.php";';
        echo '</script>';
      } else {
        echo '<script type="text/javascript">';
        echo 'alert("Incorrect password");';
        echo 'window.location.href = "index.php";'; // Replace index.php with the login page URL
        echo '</script>';
      }
    } else {
      echo '<script type="text/javascript">';
      echo 'alert("You don\'t have an account");';
      echo 'window.location.href = "index.php";'; // Replace index.php with the login page URL
      echo '</script>';
    }
  }
}
?>
