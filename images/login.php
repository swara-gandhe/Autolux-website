<?php
session_start();
include("config.php");

$loginSuccess = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['admin'] = $username;
        $loginSuccess = true;
    } else {
        $loginSuccess = false;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login | Auto Lux</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: url('admin.jpg') no-repeat center center/cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
    }
    
    html, body {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: 'Poppins', sans-serif;
  background: url('admin.jpg') no-repeat center center/cover;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  position: relative;
}

    .login-box {
      background: rgba(28, 28, 28, 0.6);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 0 20px rgba(255, 153, 0, 0.4);
      width: 100%;
      max-width: 400px;
      opacity: 0;
      transform: translateY(30px);
      transition: all 1s ease;
    }

    .login-box.show {
      opacity: 1;
      transform: translateY(0);
    }

    .login-box img {
      display: block;
      margin: 0 auto 20px;
      width: 80px;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #ff9900;
      text-shadow: 0 0 8px rgba(255, 153, 0, 0.5);
    }

    .input-container {
      position: relative;
      margin-bottom: 20px;
    }

    .input-container i {
      position: absolute;
      top: 14px;
      left: 12px;
      color: #aaa;
    }

    input {
      width: 100%;
      padding: 12px 12px 12px 38px;
      border: 2px solid #444;
      border-radius: 8px;
      background-color: #222;
      color: #fff;
      font-size: 16px;
      transition: all 0.3s;
    }

    input:focus {
      outline: none;
      border: 2px solid transparent;
      background-image: linear-gradient(#222, #222), linear-gradient(135deg, #ff9900, #ffcc00);
      background-origin: border-box;
      background-clip: padding-box, border-box;
      box-shadow: 0 0 10px rgba(255, 153, 0, 0.6);
    }

    button {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #ff9900, #ffcc00);
      color: #000;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      transform: scale(1.03);
      box-shadow: 0 0 15px rgba(255, 170, 51, 0.5);
    }

    @media screen and (max-width: 480px) {
      .login-box {
        padding: 30px 20px;
      }

      input, button {
        font-size: 14px;
        padding: 10px;
      }
    }
    .swal2-container {
  overflow-y: hidden !important;
}
  </style>
</head>
<body>
  <div class="login-box" id="loginBox">
    <img src="logo.jpg" alt="Auto Lux Logo">
    <h2>Admin Login</h2>
    <form method="post" action="login.php" onsubmit="return showLoader();">
      <div class="input-container">
        <i class="fas fa-user"></i>
        <input type="text" name="username" placeholder="Username" required>
      </div>
      <div class="input-container">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <button type="submit">Login</button>
    </form>
  </div>

  <script>
    // Animate login box on page load
    window.onload = () => {
      document.getElementById('loginBox').classList.add('show');
    };

    function showLoader() {
      Swal.fire({
        title: 'Logging in...',
        allowOutsideClick: false,
        didOpen: () => Swal.showLoading()
      });
      return true;
    }
  </script>

  <?php if ($loginSuccess === true): ?>
    <script>
      Swal.fire({
        title: "Login Successful!",
        icon: "success",
        timer: 1500,
        showConfirmButton: false
      }).then(() => {
        window.location.href = "dashboard.php";
      });
    </script>
  <?php elseif ($loginSuccess === false): ?>
    <script>
      Swal.fire({
        title: "Login Failed!",
        text: "Invalid username or password.",
        icon: "error",
        confirmButtonText: "Try Again"
      });
    </script>
  <?php endif; ?>
</body>
</html>
