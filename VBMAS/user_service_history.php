<?php
require_once("config.php");

// Ensure that the user is logged in and has a valid session
session_start();

if (!isset($_SESSION['email'])) {
    // Handle the situation when the user is not logged in
    echo "You are not logged in. Please log in to access this page.";
    exit();
}

$userEmail = $_SESSION['email'];

$query = "SELECT * FROM car_services WHERE email = '$userEmail'";
$result = mysqli_query($con, $query);

$query1 = "SELECT * FROM emergency_ser_list WHERE email = '$userEmail'";
$result1 = mysqli_query($con, $query1);

$statusLabels = array(
  1 => 'Pending',
  2 => 'On Progress',
  3 => 'Completed',
  4 => 'Cancelled'
);
?>




<!DOCTYPE html>
<html>
<head>
  <title>User - Service History</title>
  <style>
    /* Reset default margin and padding */
    body, h1, h2, ul, li, p {
      margin: 0;
      padding: 0;
    }

    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      background-image: url(user_home.jpeg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    /* Header Styles */
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    /* Navigation Styles */
    nav {
      background-color: #fff;
      padding: 10px;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    li {
      margin-right: 10px;
    }

    button.nav-button {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 8px 16px;
      font-size: 14px;
      cursor: pointer;
      border-radius: 4px;
    }

    /* Section Styles */
    section {
      padding: 20px;
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      display: none;
    }

    h2 {
      margin-top: 0;
      margin-bottom: 15px;
    }

    .service-history-table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
    }

    .service-history-table th,
    .service-history-table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .service-history-table th {
      padding: 10px;
      text-align: left;
      background-color: #f4f4f4;
      font-weight: bold;
    }

    .service-history-table tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  </style>
  <script>
    function showServiceHistory() {
      var serviceHistory = document.getElementById("service-history");
      var emergencyHistory = document.getElementById("emergency-history");

      serviceHistory.style.display = "block";
      emergencyHistory.style.display = "none";
    }

    function showEmergencyHistory() {
      var serviceHistory = document.getElementById("service-history");
      var emergencyHistory = document.getElementById("emergency-history");

      serviceHistory.style.display = "none";
      emergencyHistory.style.display = "block";
    }
  </script>
</head>
<body>
  <header>
    <h1>On-Road Vehicle Assistance and Management System</h1>
  </header>

  <nav>
    <ul>
      <li><button class="nav-button" onclick="showServiceHistory()">Service History</button></li>
      <li><button class="nav-button" onclick="showEmergencyHistory()">Emergency History</button></li>
    </ul>
  </nav>

  <section id="service-history" style="display: block;">
    <h2>Service History</h2>
    <table class="service-history-table">
      <thead>
        <tr>
          <th>Date</th>
          <th>Service Type</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['type_service'] . "</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </section>

  <section id="emergency-history" class="emergency-history-table">
    <h2>Emergency Service History</h2>
    <table class="service-history-table">
      <thead>
        <tr>
          <th>Date</th>
          <th>Customer</th>
          <th>Cost</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
  <?php
    while ($row = mysqli_fetch_assoc($result1)) {
      echo "<tr>";
      echo "<td>" . $row['added_on'] . "</td>";
      echo "<td>" . $row['Name'] . "</td>";
      echo "<td>" . $row['cost'] . "</td>";
      echo "<td>";
      
      if (isset($statusLabels[$row['status']])) {
        echo $statusLabels[$row['status']];
      } else {
        echo "Unknown Status";
      }
      
      echo "</td>";
      echo "</tr>";
    }
  ?>
</tbody>

    </table>
  </section>

  <footer>
    <!-- Your footer content -->
  </footer>
</body>
</html>
