<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phonenumber = $_POST['phone'];
   $address = $_POST['address'];
   $password = $_POST['password'];

   // File uploads
   $qualification_tmp = $_FILES['img1']['tmp_name'];
   $qualification_name = $_FILES['img1']['name'];

   $experience_tmp = $_FILES['img2']['tmp_name'];
   $experience_name = $_FILES['img2']['name'];

   $proof_tmp = $_FILES['img3']['tmp_name'];
   $proof_name = $_FILES['img3']['name'];

   // Connect to the database
   $con = new mysqli('localhost', 'root', '', 'vechicle_db');
   if ($con->connect_error) {
      die('Connection failed: ' . $con->connect_error);
   } else {
      // Prepare the database query
      $stmt = $con->prepare("INSERT INTO mechanic_login (Username, email, phone, address, img1, img2, img3, password)
                             VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

      // Bind the parameters
      $stmt->bind_param("ssisssss", $name, $email, $phonenumber, $address, $qualification_name, $experience_name, $proof_name, $password);

      // Execute the query
      if ($stmt->execute()) {
         // Move uploaded files to a permanent location
         $qualification_destination = 'uploads/' . $qualification_name;
         move_uploaded_file($qualification_tmp, $qualification_destination);

         $experience_destination = 'uploads/' . $experience_name;
         move_uploaded_file($experience_tmp, $experience_destination);

         $proof_destination = 'uploads/' . $proof_name;
         move_uploaded_file($proof_tmp, $proof_destination);

         echo "The mechanic is added successfully.";
         echo '<a href="admin_home.php">Go to mechanic home</a>';
      } else {
         echo "Error: " . $stmt->error;
      }

      // Close the statement and connection
      $stmt->close();
      $con->close();
   }
   ?>

<!DOCTYPE html>
<html>
<head>
   <title>Success</title>
   <script>
      // Show the success message pop-up
      window.onload = function() {
         alert("You have successfully submitted your application.");
         window.location.href = "mechanic.php"; // Redirect to index page
      };
   </script>
</head>
<body>
   <!-- This page will be displayed briefly before the JavaScript redirect happens -->
   <h1>sending application...</h1>
</body>
</html>

?>
