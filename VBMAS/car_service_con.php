<?php
   $car_maker = $_POST['car_maker'];
   $car_model_line = $_POST['car-model-line'];
   $select_car_year = $_POST['select-car-year'];
   $plate_number = $_POST['plate-number'];
   $pickup_drop = $_POST['pickup-drop'];
   $type_service = $_POST['type-of-service'];
   $custom_service = $_POST['custom-service'];
   $address = $_POST['address'];
   $email = $_POST['email'];
   

   //connect to the database
   $con = new mysqli('localhost', 'root', '', 'vechicle_db');
   if ($con->connect_error) {
      die('connection failed: ' . $con->connect_error);
   } else {
      $stmt = $con->prepare("INSERT INTO car_services (car_maker, model_line, cae_year, plate_no, pickup_drop, type_service, cust_serv,address,email)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)");
      $stmt->bind_param("sssssssss", $car_maker, $car_model_line, $select_car_year, $plate_number, $pickup_drop, $type_service, $custom_service,$address,$email);
      $stmt->execute();
      $stmt->close();
      $con->close();

      
      echo '<script type="text/javascript">';
      echo 'alert("Your request has been accepted");';
      echo 'window.location.href = "user_home.php";'; 
      echo '</script>';
   }
?>
