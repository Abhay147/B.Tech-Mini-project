<!DOCTYPE html>
<html>
<head>
  <title>Mechanic Module</title>
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
      background-position: center;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    main {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      margin-top: 0;
      font-size: 32px;
      text-align: center;
      color: #fff;
      background-color: #333;
      padding: 10px;
      border-radius: 5px;
    }

    h2 {
      margin-top: 20px;
      font-size: 24px;
      color: #030303;
      padding: 10px;
      border-radius: 5px;
      text-align: center;
    }

    h3 {
      margin-top: 20px;
      font-size: 24px;
      color: #000;
      text-align: left;
    }

    .services {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 20px;
      margin-top: 20px;
      text-align: center;
    }

    .service {
      padding: 20px;
      border-radius: 5px;
      text-align: center;
      background-color: #fff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .service:hover {
      transform: translateY(-5px);
    }

    .service-button {
      display: block;
      padding: 12px;
      width: 100%;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
      color: #fff;
      transition: background-color 0.3s ease;
      text-align: center;
    }

    .view-appointments {
      background-color: #073f9e;
    }

    .view-customers {
      background-color: #f542cb;
    }

    .view-emergencies {
      background-color: #9e0707;
    }

    .view-feedback {
      background-color: #FFA500;
    }

    .logout-button {
      display: inline-block;
      padding: 12px 20px;
      background-color: #000;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
      font-size: 16px;
      font-weight: bold;
      transition: background-color 0.3s ease;
      margin-top: 20px;
    }

    .logout-button:hover {
      background-color: #555;
    }

    footer {
      background-color: rgba(0, 0, 0, 0.7);
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
    <h2>Welcome, Mechanic!</h2>

    <h3>Services</h3>
    <div class="services">
      <div class="service">
        <a href="mechanic_appointments.php" class="service-button view-appointments">View Appointments</a>
      </div>
      <div class="service">
        <a href="mechanic_customer_history.php" class="service-button view-customers">View Customers</a>
      </div>
      <div class="service">
        <a href="mechanic_view_emergencies.php" class="service-button view-emergencies">View Emergencies</a>
      </div>
      <div class="service">
        <a href="mechanic_viewfeedback.php" class="service-button view-feedback">View Feedback</a>
      </div>
    </div>

    <div style="text-align: center;">
      <a href="index.php" class="logout-button">Logout</a>
    </div>
  </main>
</body>
</html>
