<?php
include("config.php");
$id = $_GET['id'];
$conn->query("UPDATE test_drive_bookings SET is_deleted = 0 WHERE id = $id");
header("Location: dashboard.php");
?>
