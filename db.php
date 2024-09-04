<?php
// Database connection details
$DB_HOST = 'autorack.proxy.rlwy.net'; // Replace with actual host if different
$DB_USER = 'root';
$DB_PASSWORD = 'PEGbmEIwMKaaCDlkKYfWVGndPSDXtNgu';
$DB_NAME = 'railway';
$DB_PORT = 21186;

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