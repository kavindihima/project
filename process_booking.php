<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data from the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ensure consistency in variable names (make sure they match the form input names)
    $name = $_POST['Name'];
    $phone_number = $_POST['number'];
    $vehicle = $_POST['vehicle'];
    $pickup_date = $_POST['pickup_date'];
    $location = $_POST['location'];

    // Insert booking data into the database
    $sql = "INSERT INTO bookings (name, phone_number, vehicle, pickup_date, location) 
            VALUES ('$name', '$phone_number', '$vehicle', '$pickup_date', '$location')";

    if ($conn->query($sql) === TRUE) {
        // You can redirect or show a confirmation message here
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="process.css"> <!-- Your CSS file -->
</head>
<body>
    <div class="container">
        <h1>Booking Confirmed!</h1>
        <div class="booking-details">
            <p><span class="highlight">Name:</span> <?php echo $name; ?></p>
            <p><span class="highlight">Phone Number:</span> <?php echo $phone_number; ?></p>
            <p><span class="highlight">Vehicle:</span> <?php echo $vehicle; ?></p>
            <p><span class="highlight">Pickup Date:</span> <?php echo $pickup_date; ?></p>
            <p><span class="highlight">Pickup Location:</span> <?php echo $location; ?></p>
        </div>

        <!-- Button to go back or navigate elsewhere -->
        <div class="button-container">
            <a href="index.php"><button>Go to Home</button></a>
        </div>
    </div>
</body>
</html>