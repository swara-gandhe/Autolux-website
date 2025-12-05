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
  <title>Auto Lux Admin Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #0a0a0a;
      color: #fff;
    }
    header {
      background-color: #111;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 2px solid orange;
    }
    header h1 {
      color: orange;
      margin: 0;
    }
    .logout-btn {
      padding: 8px 16px;
      background-color: orange;
      color: black;
      text-decoration: none;
      border-radius: 4px;
      font-weight: 600;
    }
    .main {
      padding: 30px;
      max-width: 1200px;
      margin: 0 auto;
    }
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
    }
    .card {
      background-color: #1c1c1c;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(255,165,0,0.1);
      display: flex;
      align-items: center;
      gap: 15px;
    }
    .icon-box {
      background-color: rgba(255,165,0,0.1);
      padding: 12px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .icon-box svg {
      color: orange;
      width: 32px;
      height: 32px;
    }
    .card-content h4 {
      margin: 0 0 5px;
      color: orange;
      font-size: 14px;
    }
    .card-content h2 {
      margin: 0;
      font-size: 20px;
    }
    .chart-section {
      margin-top: 40px;
    }
    .chart-box {
      background-color: #1c1c1c;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(255,165,0,0.1);
      margin-bottom: 30px;
    }
    .chart-box h3 {
      color: orange;
    }
    .table-box {
      margin-top: 40px;
      overflow-x: auto;
    }
    .table-box h3 {
      color: orange;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #1c1c1c;
      color: #fff;
      box-shadow: 0 0 10px rgba(255,165,0,0.1);
    }
    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #333;
    }
    th {
      background-color: #222;
      color: orange;
    }
    tr:nth-child(even) {
      background-color: #2a2a2a;
    }
    tr:hover {
      background-color: #333;
    }
  </style>
</head>
<body>
<header>
  <h1>Auto Lux Admin Dashboard</h1>
  <div>
    <a class="logout-btn" href="deleted_records.php" style="margin-right: 10px;">View Deleted Records</a>
    <a class="logout-btn" href="logout.php">Logout</a>
  </div>
</header>


<div class="main">
  <div class="cards">
    <div class="card">
      <div class="icon-box" data-lucide="car"></div>
      <div class="card-content">
        <h4>Car Sales</h4>
        <h2>431</h2>
      </div>
    </div>
    <div class="card">
      <div class="icon-box" data-lucide="bike"></div>
      <div class="card-content">
        <h4>Bike Sales</h4>
        <h2>192</h2>
      </div>
    </div>
    <div class="card">
      <div class="icon-box" data-lucide="trending-up"></div>
      <div class="card-content">
        <h4>Share Price</h4>
        <h2>+2.3%</h2>
      </div>
    </div>
    <div class="card">
      <div class="icon-box" data-lucide="star"></div>
      <div class="card-content">
        <h4>Customer Rating</h4>
        <h2>8.9/10</h2>
      </div>
    </div>
    <div class="card">
      <div class="icon-box" data-lucide="dollar-sign"></div>
      <div class="card-content">
        <h4>Total Earnings</h4>
        <h2>$12,630</h2>
      </div>
    </div>
    <div class="card">
      <div class="icon-box" data-lucide="thumbs-up"></div>
      <div class="card-content">
        <h4>Total Likes</h4>
        <h2>3251</h2>
      </div>
    </div>
  </div>

  <div class="chart-section">
    <div class="chart-box">
      <h3>Car vs Bike Sales (Monthly)</h3>
      <canvas id="salesChart"></canvas>
    </div>
    <div class="chart-box">
      <h3>Share Price Trend</h3>
      <canvas id="shareChart"></canvas>
    </div>
  </div>

<!-- Test Drive Booking Section -->
<div class="table-box">
  <h3>Test Drive Bookings</h3>
  <?php
  $result = $conn->query("SELECT * FROM test_drive_bookings WHERE is_deleted = 0");
  if ($result && $result->num_rows > 0) {
      echo "<table>
      <tr>
          <th>ID</th>
          <th>Full Name</th>
          <th>Phone Number</th>
          <th>Vehicle Type</th>
          <th>Model Name</th>
          <th>Email</th>
          <th>DOB</th>
          <th>Request</th>
          <th>Booking Time</th>
          <th>Actions</th>
      </tr>";
      
      while ($row = $result->fetch_assoc()) {
          $id = $row['id'];
          $fullName = htmlspecialchars($row['name']);
          $phone = htmlspecialchars($row['contact_no']);
          $vehicle = htmlspecialchars($row['vehicle_type']);
          $model = htmlspecialchars($row['model']);
          $email = htmlspecialchars($row['email']);
          $dob = htmlspecialchars($row['date']);
          $request = htmlspecialchars($row['message'] ?? '');
          $bookingTime = htmlspecialchars($row['submitted_at']);

          echo "<tr>
              <td>$id</td>
              <td>$fullName</td>
              <td>$phone</td>
              <td>$vehicle</td>
              <td>$model</td>
              <td>$email</td>
              <td>$dob</td>
              <td>$request</td>
              <td>$bookingTime</td>
              <td>
                  <a href='edit_booking.php?id=$id' style='color:orange;'>Edit</a> |
                  <a href='#' onclick='confirmDelete(\"delete_booking.php?id=$id\"); return false;' style='color:red;'>Delete</a>
              </td>
          </tr>";
      }
      echo "</table>";
  } else {
      echo "<p>No bookings found.</p>";
  }
  ?>
</div>

<!-- Contact Messages Section -->
<div class="table-box">
  <h3>Contact Messages</h3>
  <?php
  $contactResult = $conn->query("SELECT * FROM contact WHERE is_deleted = 0");
  if ($contactResult && $contactResult->num_rows > 0) {
      echo "<table>
      <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Contact No</th>
          <th>Message</th>
          <th>Submitted At</th>
          <th>Actions</th>
      </tr>";

      while ($row = $contactResult->fetch_assoc()) {
          $id = $row['id'];
          $name = htmlspecialchars($row['name']);
          $email = htmlspecialchars($row['email']);
          $contactNo = htmlspecialchars($row['contact_no']);
          $message = htmlspecialchars($row['message']);
          $submittedAt = htmlspecialchars($row['submitted_at']);

          echo "<tr>
              <td>$id</td>
              <td>$name</td>
              <td>$email</td>
              <td>$contactNo</td>
              <td>$message</td>
              <td>$submittedAt</td>
              <td>
                  <a href='edit_contact.php?id=$id' style='color:orange;'>Edit</a> |
                  <a href='#' onclick='confirmDelete(\"delete_contact.php?id=$id\"); return false;' style='color:red;'>Delete</a>
              </td>
          </tr>";
      }

      echo "</table>";
  } else {
      echo "<p>No contact messages found.</p>";
  }
  ?>
</div>


<script>
  document.addEventListener("DOMContentLoaded", function () {
    lucide.createIcons();
  });

  const salesCtx = document.getElementById('salesChart').getContext('2d');
  new Chart(salesCtx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [
        {
          label: 'Car Sales',
          data: [50, 60, 55, 70, 75, 80],
          borderColor: 'orange',
          fill: false
        },
        {
          label: 'Bike Sales',
          data: [30, 40, 35, 50, 45, 55],
          borderColor: '#fff',
          fill: false
        }
      ]
    },
    options: {
      plugins: {
        legend: {
          labels: { color: 'white' }
        }
      },
      scales: {
        x: { ticks: { color: 'white' } },
        y: { ticks: { color: 'white' } }
      }
    }
  });

  const shareCtx = document.getElementById('shareChart').getContext('2d');
  new Chart(shareCtx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [
        {
          label: 'Share Price',
          data: [210, 215, 208, 220, 225, 230],
          borderColor: 'orange',
          fill: false
        }
      ]
    },
    options: {
      plugins: {
        legend: {
          labels: { color: 'white' }
        }
      },
      scales: {
        x: { ticks: { color: 'white' } },
        y: { ticks: { color: 'white' } }
      }
    }
  });

  function confirmDelete(url) {
  console.log("Delete URL:", url); // Debug log

  Swal.fire({
    title: 'Are you sure?',
    text: "You won’t be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: 'orange',
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
