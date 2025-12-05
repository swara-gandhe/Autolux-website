<?php
include("config.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Only delete if it's marked as deleted
    $sql = "DELETE FROM contact WHERE id = $id AND is_deleted = 1";

    if ($conn->query($sql) !== TRUE) {
        echo "Error deleting record: " . $conn->error;
        exit();
    }

    $conn->close();

    // ✅ Correct redirection after deletion
    header("Location: deleted_records.php");
    exit();
} else {
    echo "Invalid Request — ID is missing or not numeric";
}
?>
