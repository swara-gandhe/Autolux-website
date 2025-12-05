<?php
include("config.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Only delete soft-deleted bookings
    $sql = "DELETE FROM test_drive_bookings WHERE id = $id AND is_deleted = 1";

    if ($conn->query($sql) !== TRUE) {
        echo "Error deleting booking: " . $conn->error;
        exit();
    }

    $conn->close();

    // ✅ Redirect back to the deleted records list
    header("Location: deleted_records.php");
    exit();
} else {
    echo "Invalid Request — ID is missing or not valid.";
}
?>
