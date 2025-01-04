<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Vehicle</title>
    <link rel="stylesheet" href="book.css">
</head>
<body>
    <h1>Book Your Vehicle Now</h1>
    <p>Welcome, <?php echo $_SESSION['user_name']; ?></p>

    <!-- Booking Form, Action points to process_booking.php -->
    <form action="process_booking.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="Name" id="Name" required>

        <label for="number">Phone Number:</label>
        <input type="text" name="number" id="number" required>

        <label for="vehicle">Select Vehicle:</label>
        <select name="vehicle" id="vehicle" required>
            <option value="wagon_r">Wagon R</option>
            <option value="swift">Swift</option>
            <option value="alto">Alto</option>
        </select>

        <label for="pickup_date">Pickup Date:</label>
        <input type="date" name="pickup_date" id="pickup_date" required>

        <label for="location">Pickup Location:</label>
        <input type="text" name="location" id="location" placeholder="Enter pickup location" required>

        <button type="submit">Confirm Booking</button>
    </form>
</body>
</html>
