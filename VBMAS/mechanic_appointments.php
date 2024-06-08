<?php

require_once("config.php");
$query = "select * from car_services";
$result = mysqli_query($con,$query);

?>
<html>
<head>
  <title>Mechanic Appointments</title>
  <style>
    /* CSS styles */

    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url(mechanic_home.jpeg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    header {
      background-color: #333;
      padding: 20px;
      color: #fff;
      text-align: center;
    }

    main {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      margin-top: 0;
    }

    .appointment-list {
      margin-top: 20px;
    }

    .appointment {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    .appointment-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }

    .appointment-date {
      font-weight: bold;
    }

    .customer-name {
      font-weight: bold;
    }

    .vehicle-details {
      margin-top: 10px;
    }

    .vehicle-info {
      display: flex;
      align-items: center;
      margin-bottom: 5px;
    }

    .vehicle-info span {
      margin-right: 10px;
    }

    .button-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .action-button {
      padding: 12px 20px;
      margin: 0 10px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
    }

    .action-button:hover {
      background-color: #555;
    }

    footer {
      background-color: #333;
      padding: 20px;
      color: #fff;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <h1>Mechanic Module</h1>
  </header>

  <main>
  <h1>Appointments</h1>

  <div class="appointment-list">
    <?php
    // Loop through the fetched data
    while ($row = mysqli_fetch_assoc($result)) {
      $appointmentDate = $row['date'];
      $customerName = $row['car_maker'];
      $issue = $row['type_service'];
      $issue = $row['type_service'];
      $issue1 = $row['cust_serv'];
      $address = $row['address'];
      if (!empty($address)) {
        $addressHtml = '<span>Address:'.$address.'</span>';
      } else {
        $addressHtml='';
      }
    ?>
      <div class="appointment">
        <div class="appointment-header">
          <span class="appointment-date">Appointment Date: <?php echo $appointmentDate ?></span>
          <span class="customer-name">Customer: <?php echo $customerName ?></span>
        </div>
        <div class="vehicle-details">
          <div class="vehicle-info"></div>
          <div class="vehicle-info">
            <span>Issue: <?php echo $issue ?> :<?php echo $issue1 ?></span>
            <?php echo $addressHtml; ?>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</main>
