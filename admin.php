<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_booking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete booking
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_sql = "DELETE FROM bookings WHERE id = $id";
    $conn->query($delete_sql);
    header('Location: admin.php'); // Refresh the page
}

// Update booking
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['Name'];
    $phone_number = $_POST['phone_number'];
    $vehicle = $_POST['vehicle'];
    $pickup_date = $_POST['pickup_date'];
    $location = $_POST['location'];

    $update_sql = "UPDATE bookings 
                   SET name='$name', phone_number='$phone_number', vehicle='$vehicle', 
                       pickup_date='$pickup_date', location='$location' 
                   WHERE id=$id";

    if ($conn->query($update_sql) === TRUE) {
        echo "Booking updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$result = $conn->query("SELECT * FROM bookings");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Bookings</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Manage Bookings</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Vehicle</th>
                <th>Pickup Date</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
                <td><?php echo $row['vehicle']; ?></td>
                <td><?php echo $row['pickup_date']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td>
                    <a href="admin.php?delete=<?php echo $row['id']; ?>">Delete</a> | 
                    <a href="admin.php?edit=<?php echo $row['id']; ?>">Edit</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <?php
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $edit_sql = "SELECT * FROM bookings WHERE id = $id";
        $edit_result = $conn->query($edit_sql);
        $edit_row = $edit_result->fetch_assoc();
    ?>
    <h2>Edit Booking</h2>
    <form action="admin.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $edit_row['id']; ?>">

        <label for="Name">Name:</label>
        <input type="text" name="Name" id="Name" value="<?php echo $edit_row['name']; ?>" required>

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" id="phone_number" value="<?php echo $edit_row['phone_number']; ?>" required>

        <label for="vehicle">Vehicle:</label>
        <select name="vehicle" id="vehicle" required>
            <option value="wagon_r" <?php echo ($edit_row['vehicle'] == 'wagon_r') ? 'selected' : ''; ?>>Wagon R</option>
            <option value="swift" <?php echo ($edit_row['vehicle'] == 'swift') ? 'selected' : ''; ?>>Swift</option>
            <option value="alto" <?php echo ($edit_row['vehicle'] == 'alto') ? 'selected' : ''; ?>>Alto</option>
        </select>

        <label for="pickup_date">Pickup Date:</label>
        <input type="date" name="pickup_date" id="pickup_date" value="<?php echo $edit_row['pickup_date']; ?>" required>

        <label for="location">Pickup Location:</label>
        <input type="text" name="location" id="location" value="<?php echo $edit_row['location']; ?>" required>

        <button type="submit" name="update">Update Booking</button>
    </form>
    <?php
    }
    ?>

</body>
</html>

<?php
$conn->close();
?>
