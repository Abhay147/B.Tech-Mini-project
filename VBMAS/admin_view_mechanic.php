<?php
require_once("config.php");
$query = "select * from mechanic_list";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mechanic list</title>
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
      display: flex;
      justify-content: flex-start;
      margin-bottom: 20px;
    }

    .tab {
      padding: 10px 20px;
      font-weight: bold;
      background-color: #f2f2f2;
      border-radius: 5px 5px 0 0;
      cursor: pointer;
    }

    .tab.active {
      background-color: #333;
      color: #fff;
    }

    .tab-content {
      display: none;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 0 5px 5px 5px;
    }

    .tab-content.active {
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
</head>
<body>
  <header>
    <h1>Admin Module - Mechanics</h1>
  </header>
 
  <main>
    <div class="tabs">
      <div class="tab active" onclick="switchTab(event, 'mechanicList')">Mechanic List</div>
      <div class="tab" onclick="switchTab(event, 'workHistory')">Work History</div>
      <div class="tab" onclick="switchTab(event, 'attendance')">Attendance</div>
      <div class="tab" onclick="switchTab(event, 'salary')">Salary</div>
    </div>

    <div id="mechanicList" class="tab-content active">
      <h1>Mechanic List</h1>
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
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['phone'];?></td>
            </tr>
            <?php
            }
            ?>
          </tr>
        </thead>
        <tbody>
          <!-- Add mechanic list data dynamically here -->
        </tbody>
      </table>
    </div>

    <?php
require_once("config.php");
$query = "select * from mechanic_list";
$result = mysqli_query($con,$query);
?>

    <div id="workHistory" class="tab-content">
      <h1>Work History</h1>
      <table>
        <thead>
          <tr>
            <th>Mechanic</th>
            <th>Service</th>
            <th>Date</th>
            <tr>
            <?php
            while($row = mysqli_fetch_assoc($result))
            {
              ?>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['services'];?></td>
              <td><?php echo $row['date'];?></td>
            </tr>
            <?php
            }
            ?>
          </tr>
          </tr>
        </thead>
        <tbody>
          <!-- Add work history data dynamically here -->
        </tbody>
      </table>
    </div>
    <?php
if (isset($_POST['submit'])) {
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "vechicle_db";
  $connect = mysqli_connect($hostname, $username, $password, $dbname);
  
  $name = $_POST['name'];
  $attendance = $_POST['attendance'];
  
  $query = "UPDATE `mechanic_list` SET `attendance`='$attendance' WHERE name ='$name'";
  $result = mysqli_query($connect, $query);
  
  if ($result) {
    echo 'Data updated successfully';
  } else {
    echo 'Data not updated';
  }
  
  mysqli_close($connect);
}
?>

    <?php
require_once("config.php");
$query = "select * from mechanic_list";
$result = mysqli_query($con,$query);
?>

    <div id="attendance" class="tab-content">
      <h1>Attendance</h1>
      <table>
        <thead>
          <tr>
            <th>Mechanic</th>
            <th>Month</th>
            <th>Attendance</th>
            <tr>
            <?php
            while($row = mysqli_fetch_assoc($result))
            {
              ?>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['month'];?></td>
              <td><?php echo $row['attendance'];?></td>
              <td>
              <form method="POST" action="admin_view_mechanic.php">
              <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
              <input type="number" name="attendance" value="<?php echo $row['attendance']; ?>" required>
              <input type="submit" name="submit" value="Update">
            </form>
            </td>
            </tr>
            <?php
            }
            ?>
          </tr>
          </tr>
        </thead>
        <tbody>
          <!-- Add attendance data dynamically here -->
        </tbody>
      </table>
    </div>
    
    <?php
require_once("config.php");
$query = "select * from mechanic_list";
$result = mysqli_query($con,$query);
?>

    <div id="salary" class="tab-content">
      <h1>Salary</h1>
      <table>
        <thead>
          <tr>
            <th>Mechanic</th>
            <th>Month</th>
            <th>Salary</th>
            <tr>
            <?php
            while($row = mysqli_fetch_assoc($result))
            {
              ?>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['month'];?></td>
              <td><?php echo $row['salary'];?></td>
            </tr>
            <?php
            }
            ?>
          </tr>
          </tr>
        </thead>
        <tbody>
          <!-- Add salary data dynamically here -->
        </tbody>
      </table>
    </div>
  </main>


  <script>
    function switchTab(event, tabId) {
      // Get all tab contents and hide them
      const tabContents = document.getElementsByClassName("tab-content");
      for (let i = 0; i < tabContents.length; i++) {
        tabContents[i].style.display = "none";
      }

      // Get all tabs and remove active class
      const tabs = document.getElementsByClassName("tab");
      for (let i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove("active");
      }

      // Show the selected tab content and set the tab as active
      document.getElementById(tabId).style.display = "block";
      event.currentTarget.classList.add("active");
    }
  </script>
</body>
</html>
