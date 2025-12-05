<?php
$servername = "localhost"; // This means the database is on your own PC
$username = "root";        // Default XAMPP username
$password = "";            // Default XAMPP password is empty
$database = "autolux";     // Replace this with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
?>