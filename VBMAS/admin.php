<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
    }
    
    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-image: url(admin.jpg);
      background-size: cover;
    }
    
    .login-box {
      width: 400px;
      padding: 40px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .login-box h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    
    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-bottom: 1px solid #999;
      background: transparent;
      outline: none;
      transition: border-color 0.3s;
    }
    
    .login-box input[type="text"]:focus,
    .login-box input[type="password"]:focus {
      border-color: #007bff;
    }
    
    .login-box input[type="submit"] {
      width: 100%;
      padding: 10px 0;
      border: none;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }
    
    .login-box input[type="submit"]:hover {
      background-color: #0069d9;
    }
    
    .login-box .message {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: #999;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-box">
      <h2>Admin Login</h2>
      <form action="admin_login.php" method="POST">
        <input type="text" placeholder="Username" name="Username">
        <input type="password" placeholder="Password" name ="Password">
        <input type="submit" value="Login" >
      </form>
      
    </div>
  </div>

</body>
</html>
