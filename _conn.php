<?php
// Database connection settings
$servername = "localhost"; // Change to your MySQL server address
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "acmed_db"; // Change to your MySQL database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// // Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
