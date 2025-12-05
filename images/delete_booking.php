<?php
include("config.php");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "UPDATE test_drive_bookings SET is_deleted = 1 WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error updating booking: " . $conn->error;
    }
} else {
    echo "Invalid or missing ID!";
}
?>
