<?php
include("config.php");

// Check database connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if ID is provided in URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Prepare the SQL statement to prevent SQL injection
    $sql = "UPDATE contact SET is_deleted = 1 WHERE id = $id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect back to dashboard after successful soft delete
        header("Location: dashboard.php");
        exit();
    } else {
        // Show SQL error
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Invalid or missing ID!";
}
?>
