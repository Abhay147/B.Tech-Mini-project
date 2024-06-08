<!DOCTYPE html>
<html>
<head>
  <title>Mechanic Tracking By User</title>
  <style>
    body {
      background-image: url(user_home.jpeg);
      background-size: cover;
      background-repeat: no-repeat;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 40px;
      background-color: rgba(255, 255, 255, 0.8);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    .status-container {
      text-align: center;
      margin-top: 40px;
    }

    .status {
      font-size: 24px;
      margin-bottom: 10px;
      color: #666;
      animation: fade-in 1s ease-in-out;
    }

    .status-update {
      display: none;
      margin-top: 10px;
      font-size: 20px;
      opacity: 0.7;
    }

    .status-update.active {
      display: block;
      color: #4CAF50;
      opacity: 1;
      animation: fade-in 1s ease-in-out;
    }

    .progress-bar {
      width: 100%;
      height: 10px;
      background-color: #ddd;
      border-radius: 5px;
      overflow: hidden;
      margin-top: 10px;
    }

    .progress {
      width: 0;
      height: 100%;
      background-color: #4CAF50;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      // ... existing script ...

      // Function to update status and progress bar
      function updateStatus(status, progress) {
        $('.status').text(status);
        $('.status-update').removeClass('active');
        $('.status-update.' + status.toLowerCase().replace(/ /g, '-')).addClass('active');
        $('.progress').css('width', progress + '%');
        // ... existing code ...
      }

      // Simulate the status updates
      setTimeout(function() {
        updateStatus('Customer Request Approved', 20);
      }, 2000);

      setTimeout(function() {
        updateStatus('Mechanic is Assigned', 50);
      }, 4000);

      setTimeout(function() {
        updateStatus('Mechanic Will Arrive Shortly', 80);
      }, 6000);

      setTimeout(function() {
        updateStatus('Mechanic Has Arrived', 100);
      }, 60000);
    });
  </script>
</head>
<body>
  <div class="container">
    <h1>Mechanic Tracking</h1>

    <div class="status-container">
      <div class="status">Loading...</div>
      <div class="status-update customer-request">Customer Request Approved</div>
      <div class="status-update mechanic-assigned">Mechanic is Assigned</div>
      <div class="status-update Mechanic-will-arrive-shortly">Mechanic Will Arrive Shortly</div>
      <div class="status-update mechanic-arrived">Mechanic Has Arrived</div>
  
      <div class="progress-bar">
        <div class="progress"></div>
      </div>
    </div>
  </div>
</body>
</html>
