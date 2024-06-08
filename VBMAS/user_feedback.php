<!DOCTYPE html>
<html>
<head>
  <title>User Feedback</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url(user_home.jpeg);
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

    form {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: white; /* Change background color to white */
      color: #333; /* Adjust the text color */
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #eee; /* Change the background color on hover */
    }

    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      margin-bottom: 10px;
    }

    textarea {
      resize: vertical;
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
    <h1>Provide Feedback</h1>
    <form action="feedback_connection.php" method="POST" id="feedbackForm">
      <label for="Name">Name:</label>
      <input type="text" name="name" placeholder="Name" pattern="[a-zA-Z]+" required>
    
      <label for="rating">Rating:</label>
      <select id="rating" name="rating" required>
        <option value="">Select rating</option>
        <option value="1">1 - Poor</option>
        <option value="2">2 - Fair</option>
        <option value="3">3 - Average</option>
        <option value="4">4 - Good</option>
        <option value="5">5 - Excellent</option>
      </select>
      <br>
      <label for="comment">Comment:</label>
      <textarea id="comment" name="comment" rows="4" required></textarea>
      <br>
      <input type="submit" value="Submit Feedback">
    </form>
  </header>
</body>
</html>