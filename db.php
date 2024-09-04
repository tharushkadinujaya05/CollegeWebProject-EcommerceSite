<?php
// Start session (if needed)
session_start();

// Retrieve environment variables
$DB_HOST = getenv('DB_HOST');
$DB_USER = getenv('DB_USER');
$DB_PASSWORD = getenv('DB_PASSWORD');
$DB_NAME = getenv('DB_NAME');
$DB_PORT = getenv('DB_PORT');

// Attempt to connect to the database
$db = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);

// Check the connection
if ($db) {
    echo "Database connection successful!";
} else {
    echo "Database connection failed: " . mysqli_connect_error();
}

// Close the connection (if open)
mysqli_close($db);
?>