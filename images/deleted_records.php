<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Deleted Records | Auto Lux</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
  body {
    font-family: 'Poppins', sans-serif;
    background-color: #0a0a0a;
    color: #fff;
    padding: 30px;
  }
  h2 {
    color: orange;
    margin-top: 40px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 40px;
    background-color: #1c1c1c;
    color: white;
    box-shadow: 0 0 10px rgba(255,165,0,0.1);
    text-align: center;
  }
  th, td {
    padding: 14px 12px;
    border-bottom: 1px solid #333;
    vertical-align: middle;
    font-size: 15px;
  }
  th {
    background-color: #222;
    color: orange;
    font-size: 16px;
  }
  tr:hover {
    background-color: #2a2a2a;
  }

  /* Links inside tables */
  a.action-link {
    text-decoration: none;
    font-weight: 500;
    padding: 6px 10px;
    border-radius: 4px;
    display: inline-block;
  }
  a.restore-link {
    color: #00ff00;
  }
  a.delete-link {
    color: red;
  }

  .back {
    background-color: orange;
    color: black;
    padding: 10px 20px;
    display: inline-block;
    margin-bottom: 20px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
  }
</style>
</head>
<body>

<a class="back" href="dashboard.php">← Back to Dashboard</a>

<h2>Deleted Test Drive Bookings</h2>
<?php
$deletedBookings = $conn->query("SELECT * FROM test_drive_bookings WHERE is_deleted = 1");
if ($deletedBookings && $deletedBookings->num_rows > 0) {
    echo "<table>
    <tr>
        <th>ID</th><th>Name</th><th>Vehicle</th><th>Model</th><th>Actions</th>
    </tr>";
    while ($row = $deletedBookings->fetch_assoc()) {
        $restoreURL = "restore_booking.php?id={$row['id']}";
        $deleteURL = "permanentlydelete_booking.php?id={$row['id']}";
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['vehicle_type']}</td>
            <td>{$row['model']}</td>
            <td>
                <a class='action-link restore-link' onclick='confirmRestore(\"$restoreURL\")'>Restore</a>
                <a class='action-link delete-link' onclick='confirmDelete(\"$deleteURL\")'>permanently delete</a>
            </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No deleted bookings found.</p>";
}
?>

<h2>Deleted Contact Messages</h2>
<?php
$deletedContacts = $conn->query("SELECT * FROM contact WHERE is_deleted = 1");
if ($deletedContacts && $deletedContacts->num_rows > 0) {
    echo "<table>
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Actions</th>
    </tr>";
    while ($row = $deletedContacts->fetch_assoc()) {
        $restoreURL = "restore_contact.php?id={$row['id']}";
        $deleteURL = "permanentlydelete_contact.php?id={$row['id']}";
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['message']}</td>
            <td>
                <a class='action-link restore-link' onclick='confirmRestore(\"$restoreURL\")'>Restore</a>
                <a class='action-link delete-link' onclick='confirmDelete(\"$deleteURL\")'>permanently Delete</a>
            </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No deleted contact messages found.</p>";
}
$conn->close();
?>

<!-- SweetAlert2 Confirmation Scripts -->
<script>
  function confirmRestore(url) {
    Swal.fire({
      title: 'Restore this record?',
      text: "It will be moved back to active records.",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: 'lime',
      cancelButtonColor: '#666',
      confirmButtonText: 'Yes, restore it!',
      background: '#1c1c1c',
      color: '#fff'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = url;
      }
    });
  }

  function confirmDelete(url) {
    Swal.fire({
      title: 'Delete permanently?',
      text: "This action cannot be undone!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: 'red',
      cancelButtonColor: '#666',
      confirmButtonText: 'Yes, delete it!',
      background: '#1c1c1c',
      color: '#fff'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = url;
      }
    });
  }
</script>

</body>
</html>
