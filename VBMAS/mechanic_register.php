<!DOCTYPE html>
<html>
<head>
  <title>Mechanic Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-image: url(admin_home.jpg);
      background-size: cover;
      background-position: center;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  
    }

    h2 {
      color: #333;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="number"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Mechanic Registration Form</h2>
    <form action="register_mechanic_con.php" method="POST" enctype="multipart/form-data">
   <!-- Your form fields here -->
   <label for="name">Name:</label>
   <input type="text" name="name">

   <label for="email">Email:</label>
   <input type="email" name="email">

   <label for="phone">Phone:</label>
   <input type="text" name="phone">

   <label for="address">Address:</label>
   <input type="text" name="address">

   <label for="qualification">Qualification:</label>
   <input type="file" name="img1">

   <label for="experience">Experience:</label>
   <input type="file" name="img2">

   <label for="Identity">Identity Proof:</label>
   <input type="file" name="img3">

   <label for="password">Password:</label>
   <input type="password" name="password">


   <input type="submit" value="Submit">
</form>

  </div>
</body>
</html>
