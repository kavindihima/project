<?php
$conn = mysqli_connect(
    getenv('DB_HOST') ?: 'localhost',
    getenv('DB_USER') ?: 'root',
    getenv('DB_PASSWORD') ?: '',
    getenv('DB_NAME') ?: 'user_db'
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>