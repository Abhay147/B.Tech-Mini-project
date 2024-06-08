<?php

require_once("config.php");
$query = "select * from user_login";
$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Customer Details</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url(admin_home.jpg);
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

    .tabs {
      margin-bottom: 20px;
    }

    .tabs ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
    }

    .tabs ul li {
      flex: 1;
      text-align: center;
    }

    .tabs ul li a {
      display: block;
      padding: 10px 20px;
      text-decoration: none;
      background-color: #eee;
      color: #333;
      border-radius: 5px 5px 0 0;
    }

    .tabs ul li a.active {
      background-color: #333;
      color: #fff;
    }

    .tabs-content {
      display: none;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 0 5px 5px 5px;
    }

    .tabs-content.active {
      display: block;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th,
    table td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ccc;
    }

    table th {
      background-color: #f2f2f2;
    }

    footer {
      background-color: #333;
      padding: 20px;
      color: #fff;
      text-align: center;
    }
  </style>
  <script>
    function switchTab(event, tabName) {
      // Hide all tabs
      const tabContents = document.getElementsByClassName("tabs-content");
      for (let i = 0; i < tabContents.length; i++) {
        tabContents[i].style.display = "none";
      }

      // Remove "active" class from all tab links
      const tabLinks = document.getElementsByClassName("tab-link");
      for (let i = 0; i < tabLinks.length; i++) {
        tabLinks[i].classList.remove("active");
      }

      // Show the selected tab and mark its link as active
      document.getElementById(tabName).style.display = "block";
      event.currentTarget.classList.add("active");
    }
  </script>
</head>
<body>
  <header>
    <h1>Admin Module - Customer Details</h1>
  </header>

  <main>
    <div class="tabs">
      <ul>
        <li><a href="#" class="tab-link active" onclick="switchTab(event, 'customerList')">Customer List</a></li>
        <li><a href="#" class="tab-link" onclick="switchTab(event, 'customerInvoice')">Customer Invoice</a></li>
      </ul>
    </div>

    <div id="customerList" class="tabs-content active">
      <h1>Customer List</h1>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <tr>
            <?php
            while($row = mysqli_fetch_assoc($result))
            {
              ?>
              <td><?php echo $row['Name'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['phone'];?></td>
            </tr>
            <?php
            }
            ?>
          </tr>
        </thead>
        <tbody>
          <!-- Add customer list data dynamically here -->
        </tbody>
      </table>
    </div>
    <?php

require_once("config.php");
$query = "select * from emergency_ser_list";
$result = mysqli_query($con, $query);
$statusLabels = array(
  1 => 'Pending',
  2 => 'On Progress',
  3 => 'Completed',
  4 => 'Cancelled'
);

?>

<div id="customerInvoice" class="tabs-content">
  <h1>Customer Invoice</h1>
  <table>
    <thead>
      <tr>
        <th>Invoice ID</th>
        <th>Customer Name</th>
        <th>Amount</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <?php
  $rows = array(); // Array to store the rows

  // Fetch all rows and store them in the $rows array
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  // Reverse the order of the rows
  $rows = array_reverse($rows);

  // Loop through the rows in reverse order and display the table
  foreach ($rows as $row) {
?>
  <tr>
    <td><?php echo $row['Request_id']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['cost']; ?></td>
    <td>
      <?php
        // Check if the status key exists in the $statusLabels array
        if (isset($statusLabels[$row['status']])) {
          echo $statusLabels[$row['status']];
        } else {
          echo "Unknown Status";
        }
      ?>
    </td>
  </tr>
<?php
  }
     ?>
    </tbody>
  </table>
</div>
</main>
</body>
</html>
