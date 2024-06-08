<?php
   $name = $_POST['name'];
   $rating = $_POST['rating'];
   $comment = $_POST['comment'];

   
   //connect database
$con = new mysqli('localhost','root','','vechicle_db');
if($con->connect_error){
   die('connection failed :'.$con->connect_error);
}else{
   $stmt = $con->prepare("insert into rating(name, rating, comments)
   values(?,?,?)");
   $stmt->bind_param("sss",$name,$rating, $comment);
   $stmt->execute();
   echo "your feedback has been recorded..";
   echo '<a href="user_home.php">Go to index page</a>';
   $stmt->close();
   $con->close();
}
 


  
?>