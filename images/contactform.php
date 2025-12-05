<?php
$conn = new mysqli("localhost", "root", "", "autolux");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $contact_no = $conn->real_escape_string($_POST['contact_no']);
    $message = $conn->real_escape_string($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($contact_no) && !empty($message)) {
        $sql = "INSERT INTO Contact (name, email, contact_no, message)
                VALUES ('$name', '$email', '$contact_no', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "
            <!DOCTYPE html>
            <html>
            <head>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            </head>
            <body>
                <script>
                    Swal.fire({
                        title: 'Message Sent!',
                        text: 'Thank you, we have received your message.',
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
            echo "<h3>❌ MySQL Error: " . $conn->error . "</h3>";
        }
    } else {
        echo "<h3>❌ Please fill in all fields.</h3>";
    }
} else {
    echo "<h3>Invalid request.</h3>";
}

$conn->close();
?>