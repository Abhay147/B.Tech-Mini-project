<?php
// Database connection
$con = mysqli_connect('localhost', 'root', '', 'vechicle_db');

// Get the request ID and status from the AJAX request
if (isset($_POST['Request_id']) && isset($_POST['status'])) {
  $Request_id = $_POST['Request_id'];
  $status = $_POST['status'];

  // Get the corresponding label for the selected status
  $statusLabels = array(
    1 => "pending",
    2 => "on progress",
    3 => "completed",
    4 => "canceled"
  );
  $statusLabel = $statusLabels[$status];

  // Update the status in the database
  mysqli_query($con, "UPDATE emergency_ser_list SET status='$statusLabel' WHERE Request_id='$Request_id'");

  // Return the updated status as the response
  echo $statusLabel;
}
?>
