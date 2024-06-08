<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phonenumber = $_POST['phone'];
   $password = $_POST['password'];

   //connect database
   $con = new mysqli('localhost','root','','vechicle_db');
   if($con->connect_error){
      die('connection failed :'.$con->connect_error);
   }else{
      $stmt = $con->prepare("insert into user_login(name, email,phone,password)
      values(?,?,?,?)");
      $stmt->bind_param("ssis",$name,$email,$phonenumber,$password);
      $stmt->execute();
      echo "you have created a account";

      
      echo '<a href="index.php">Go to index page</a>';
      $stmt->close();
      $con->close();
    
   
   }
   


?>