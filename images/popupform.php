<?php
$conn = new mysqli("localhost", "root", "", "autolux");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch and escape form inputs
    $full_name = $conn->real_escape_string($_POST['name']);
    $phone_number = $conn->real_escape_string($_POST['contact_no']);
    $vehicle_type = $conn->real_escape_string($_POST['vehicle_type']);
    $model_name = $conn->real_escape_string($_POST['model']);
    $email_address = $conn->real_escape_string($_POST['email']);
    $dob = $conn->real_escape_string($_POST['date']);
    $specific_request = $conn->real_escape_string($_POST['message']);

    // Validate fields are not empty
    if (!empty($full_name) && !empty($phone_number) && !empty($vehicle_type) &&
        !empty($model_name) && !empty($email_address) && !empty($dob)) {

        // Insert using prepared statement
        $stmt = $conn->prepare("INSERT INTO test_drive_bookings
            (name, contact_no, vehicle_type, model, email, date, message)
            VALUES (?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssss", $full_name, $phone_number, $vehicle_type, $model_name, $email_address, $dob, $specific_request);

        if ($stmt->execute()) {
            echo "
            <!DOCTYPE html>
            <html>
            <head>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            </head>
            <body>
                <script>
                    Swal.fire({
                        title: 'Test Drive Booked!',
                        text: 'Your test drive request has been submitted successfully.',
                        icon: 'success',
                        confirmButtonText: 'Okay'
                    }).then(() => {
                        window.location.href = 'contact.php';
                    });
                </script>
            </body>
            </html>
            ";
        } else {
            echo "<h3>❌ Database Error: " . $stmt->error . "</h3>";
        }

        $stmt->close();
    } else {
        echo "<h3>❌ Please fill in all required fields.</h3>";
    }
} else {
    echo "<h3>Invalid request.</h3>";
}

$conn->close();
?>
