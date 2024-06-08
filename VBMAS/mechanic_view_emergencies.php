<?php
//database connection
$con=mysqli_connect('localhost','root','','vechicle_db');
$sql=mysqli_query($con,"select * from emergency_ser_list");
 
//get update id and status

if(isset($_GET['Request_id']) && isset($_GET['status'])) {
  $Request_id=$_GET['Request_id'];
  $status=$_GET['status'];
  mysqli_query($con,"update emergency_ser_list set status='$status' where Request_id='$Request_id'");
  header("location:mechanic_view_emergencies.php");
}elseif(isset($_GET['cancelled'])) {
  $select = "DELETE FROM emergency_ser_list WHERE Request_id='$Request_id'";
  $result = mysqli_query($con, $select);
  echo '<script type="text/javascript">';
  echo 'alert("service is cancelled!");';
  echo 'window.location.href="mechanic_view_emergencies.php";';
  echo '</script>';
}



?>
<!DOCTYPE html>
<html>
<head>
  <title>Mechanic Dashboard</title>
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

    .emergency-list {
      margin-top: 20px;
    }

    .emergency-list table {
      width: 100%;
      border-collapse: collapse;
    }

    .emergency-list th,
    .emergency-list td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ccc;
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
    <h1>Mechanic Dashboard</h1>

    <div class="emergency-list">
      <h2>Emergency Requests</h2>
      <table>
        <thead>
          <tr>
            <th>Request ID</th>
            <th>Customer</th>
            <th>Location</th>
            <th>Service Type</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          
    </div>
        </thead>
        <tbody>
        <?php
  $i=1;
  $rows = array();
  if (mysqli_num_rows($sql)>0) {
    while($row=mysqli_fetch_assoc($sql)) {
      $rows[] = $row;
    }
  }
  $rows = array_reverse($rows); // Reverse the array to display the rows in reverse order
  foreach ($rows as $row) {
?>
  <tr>
    <td><?php echo $i++ ?></td>
    <td><?php echo $row['Name'] ?></td>
    <td><?php echo $row['Location'] ?></td>
    <td><?php echo $row['Service_type'] ?></td>
    <td><?php echo $row['added_on'] ?></td>
    <td class="status">
      <?php
      if ($row['status']==1){
        echo "pending";
      }if ($row['status']==2){
        echo "on progress";
      }if ($row['status']==3){
        echo "completed";
      }
      if ($row['status']==4){
        echo "cancelled";
      }
      ?>
    </td>
    <td>
      <select onchange="status_update(this.options[this.selectedIndex].value, '<?php echo $row['Request_id']; ?>')">
        <option value="1">pending</option>
        <option value="2">on-progress</option>
        <option value="3">completed</option>
        <option value="4">cancelled</option>
      </select>
    </td>
  </tr>
<?php
  }
?>

      
          
          
        </tbody>
      </table>
    </div>
  </main>
  <script type="text/javascript">
    function status_update(value, Request_id) {
     //alert(Request_id);
     let url ="http://127.0.0.1/VBMAS/mechanic_view_emergencies.php";
     window.location.href=url+"?Request_id="+Request_id+"&status="+value;
    }
  </script>
</body>
</html>