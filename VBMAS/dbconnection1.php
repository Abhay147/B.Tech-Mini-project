<?php
$name = $_POST['Name'];
$phoneNumber = $_POST['Phone_number'];
$email = $_POST['Email'];
$location = $_POST['Location'];
$serviceType = $_POST['Service_type'];

// Connect to the database
$con = new mysqli('localhost', 'root', '', 'vechicle_db');
if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
} else {
    $stmt = $con->prepare("INSERT INTO emergency_ser_list (Name, Phone_number, Email, Location, Service_type) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $phoneNumber, $email, $location, $serviceType);
    $stmt->execute();
    $stmt->close();
    $con->close();

    // Send email notification to the user
    $to = $email;
    $subject = "Emergency Service Request Confirmation";
    $message = "Dear $name,\n\nThank you for your emergency service request. Our team has received your request, and we are working on it. We will reach out to you shortly.\n\nBest regards,\nThe Emergency Service Team";
    $headers = "From: atv1933@gmail.com"; // Replace with your email address

    // Uncomment the following line to send the email (make sure to replace your_email@example.com)
    // mail($to, $subject, $message, $headers);

    echo '<script>
            alert("Your request has been sent, and our mechanic is on the way.");
            window.location.href = "user_home.php";
          </script>';
}
?>

