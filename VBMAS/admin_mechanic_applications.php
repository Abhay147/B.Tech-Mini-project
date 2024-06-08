<?php

require_once("config.php");

if (isset($_GET['Username'])) {
  $Username = $_GET['Username'];

  if (isset($_POST['approve'])) {
    $select = "UPDATE mechanic_login SET status='approved' WHERE Username='$Username'";
    $result = mysqli_query($con, $select);
    echo '<script type="text/javascript">';
    echo 'alert("User approved!");';
    echo 'window.location.href="admin_mechanic_applications.php";';
    echo '</script>';
  } elseif (isset($_POST['reject'])) {
    $select = "DELETE FROM mechanic_login WHERE Username='$Username'";
    $result = mysqli_query($con, $select);
    echo '<script type="text/javascript">';
    echo 'alert("User is rejected!");';
    echo 'window.location.href="admin_mechanic_applications.php";';
    echo '</script>';
  }
}

$query = "SELECT * FROM mechanic_login";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Mechanic Applications</title>
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
      max-width: 900px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      margin-top: 0;
    }

    table {
      width: 98%;
      border-collapse: collapse;
    }

    table th,
    table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ccc;
    }

    table th {
      background-color: #f2f2f2;
    }

    .action-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .action-buttons button {
      padding: 8px 12px;
      font-size: 14px;
      border-radius: 4px;
      cursor: pointer;
    }

    .approve-button {
      background-color: #4caf50;
      color: #fff;
      border: none;
    }

    .reject-button {
      background-color: #f44336;
      color: #fff;
      border: none;
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
    <h1>Admin Module - Mechanic Applications</h1>
  </header>

  <main>
    <h1>Mechanic Applications</h1>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Qualification</th>
          <th>Experience</th>
          <th>status</th>
          <th>Action</th>
          <tr>
          <?php
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <td><?php echo $row['Username']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td>
   <img src="uploads/<?php echo $row['img1']; ?>" alt="Qualification Image" style="width: 100px; height: 100px;">
</td>
<td>
   <img src="uploads/<?php echo $row['img2']; ?>" alt="Experience Image" style="width: 100px; height: 100px;">
</td>
<td><?php echo $row['status']; ?></td>
<td class="action-buttons">
          <form method="post" action="admin_mechanic_applications.php?Username=<?php echo $row['Username']; ?>">
            <button type="submit" name="approve" class="approve-button">Approve</button>
            <button type="submit" name="reject" class="reject-button">Reject</button>
          </form>
        </td>
      </tr>
    <?php
    }
    ?>
        </tr>
      </thead>
    </table>
  </main>
</body>
</html>
