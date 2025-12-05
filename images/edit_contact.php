<?php
include("config.php");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM contact WHERE id = $id");
$row = $result->fetch_assoc();

$updated = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $message = $_POST['message'];

    $conn->query("UPDATE contact SET 
        name='$name', email='$email', contact_no='$contact_no', message='$message'
        WHERE id=$id");

    $updated = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Contact | Auto Lux Admin</title>
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
    <h2>Edit Contact Message</h2>
    <form method="POST">
        <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" required placeholder="Full Name">
        <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>" required placeholder="Email Address">
        <input type="text" name="contact_no" value="<?= htmlspecialchars($row['contact_no']) ?>" required placeholder="Contact Number">
        <textarea name="message" placeholder="Message"><?= htmlspecialchars($row['message']) ?></textarea>
        <button type="submit">Update Contact</button>
    </form>
</div>

<?php if ($updated): ?>
<script>
    Swal.fire({
        title: 'Updated!',
        text: 'Contact details have been updated successfully.',
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
