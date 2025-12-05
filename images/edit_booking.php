<?php
include("config.php");

$updated = false;

// Check if id is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Booking ID not specified.");
}

$id = (int)$_GET['id'];

// Fetch booking details
$stmt = $conn->prepare("SELECT * FROM test_drive_bookings WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no']; // corrected typo
    $vehicle_type = $_POST['vehicle_type'];
    $model = $_POST['model'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    // Update query with prepared statement
    $stmt = $conn->prepare("UPDATE test_drive_bookings SET 
        name=?, contact_no=?, vehicle_type=?, model=?, email=?, date=?, message=? 
        WHERE id=?");

    $stmt->bind_param("sssssssi", $name, $contact_no, $vehicle_type, $model, $email, $date, $message, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $updated = true;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Booking | Auto Lux Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #0e0e0e;
            color: #ffffff;
            padding: 40px;
        }

        .card {
    max-width: 700px;
    margin: auto;
    background-color: #1c1c1c;
    padding: 35px;
    border-radius: 18px;
    box-shadow:
        0 0 20px rgba(255, 165, 0, 0.4),   /* soft outer glow */
        0 0 40px rgba(255, 165, 0, 0.2),   /* more spread */
        0 8px 30px rgba(255, 102, 0, 0.1); /* subtle depth */
    transition: box-shadow 0.3s ease-in-out;
}


        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #ffa500;
            font-weight: 600;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px 16px;
            margin-bottom: 15px;
            border: 1px solid #333;
            border-radius: 10px;
            font-size: 15px;
            background-color: #000000;
            color: #ffffff;
        }

        input:focus,
        textarea:focus {
            border-color: #ffa500;
            outline: none;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #ffa500;
            color: #000;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e69500;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Edit Test Drive Booking</h2>
    <form method="POST">
        <input type="text" name="full_name" value="<?= htmlspecialchars($row['name']) ?>" required placeholder="Full Name">
        <input type="text" name="phone_number" value="<?= htmlspecialchars($row['contact_no']) ?>" required placeholder="Phone Number">
        <input type="text" name="vehicle_type" value="<?= htmlspecialchars($row['vehicle_type']) ?>" required placeholder="Vehicle Type">
        <input type="text" name="model_name" value="<?= htmlspecialchars($row['model']) ?>" required placeholder="Model Name">
        <input type="email" name="email_address" value="<?= htmlspecialchars($row['email']) ?>" required placeholder="Email Address">
        <input type="date" name="dob" value="<?= htmlspecialchars($row['date']) ?>" required>
        <textarea name="specific_request" placeholder="Specific Request"><?= htmlspecialchars($row['message']) ?></textarea>
        <button type="submit">Update Booking</button>
    </form>
</div>

<?php if ($updated): ?>
<script>
    Swal.fire({
        title: 'Updated!',
        text: 'Booking details have been updated successfully.',
        icon: 'success',
        confirmButtonColor: '#ffa500',
        confirmButtonText: 'OK'
    }).then(() => {
        window.location.href = "dashboard.php";
    });
</script>
<?php endif; ?>

</body>
</html>
