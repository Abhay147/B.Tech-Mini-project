<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(emergency.jpg);
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .emergency-box {
            width: 400px;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.7);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .emergency-box h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .emergency-box input[type="text"],
        .emergency-box input[type="tel"],
        .emergency-box input[type="email"],
        .emergency-box select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #999;
            background: transparent;
            outline: none;
            transition: border-color 0.3s;
        }

        .emergency-box input[type="text"]:focus,
        .emergency-box input[type="tel"]:focus,
        .emergency-box input[type="email"]:focus,
        .emergency-box select:focus {
            border-color: #007bff;
        }

        .emergency-box button {
            width: 100%;
            padding: 10px 0;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .emergency-box button:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>
    <div class="emergency-box">
        <h2>Emergency Service</h2>
        <form action="dbconnection.php" method="POST">
            <input type="text" placeholder="Name" name="Name"  pattern="[a-zA-Z]+" required>
            <input type="tel" placeholder="Phone Number" name="Phone_number" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" required>
            <input type="email" placeholder="Email" name="Email" required>
            <input type="text" placeholder="Location" name="Location" required>
            
            <select name="Service_type" required>
                <option value="" disabled selected>Type of Issue</option>
                <option value="Road Accident">Road Accident</option>
                <option value="Mechanical Breakdown">Mechanical Breakdown</option>
                <option value="Flat Tire">Flat Tire</option>
                <option value="Fuel Emergency">Fuel Emergency</option>
                <!-- Add more options as needed -->
            </select>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>