<?php
require_once("config.php");
$query = "select * from rating";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Module Feedback</title>
    <style>
          body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(admin_home.jpg); 
            background-size: cover;
            background-position: center;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .feedback {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .name {
            font-weight: bold;
            color: #333;
        }
        .rating {
            color: #f39c12;
            margin-left: 10px;
            font-size: 18px;
        }
        .comments {
            margin-top: 10px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Module Feedback</h1>
        
        <?php
        // Loop through the fetched data
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $rating = $row['rating'];
            $comments = $row['comments'];
        ?>
            <div class="feedback">
                <span class="name"><?php echo $name; ?></span>
                <span class="rating">Rating: <?php echo $rating; ?></span>
                <p class="comments"><?php echo $comments; ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</body>
</html>
