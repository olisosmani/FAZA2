
<?php

session_start();

$error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $servername = "localhost";
    $usernameDB = "root";
    $passwordDB = "";
    $db = "Car Rental";

    // Create connection
    $conn = new mysqli($servername, $usernameDB, $passwordDB, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // check login
    $stmt = $conn->prepare("SELECT password, status FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashedPassword, $status);
    $stmt->fetch();

    if ($hashedPassword && password_verify($password, $hashedPassword)) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = $status;
        if ($status === 'admin') {
            header("Location: adminDashboard.php");
        } else if ($status === 'user') {
            header("Location: userHome.php");
        }
    exit;
} else {
    $error = "Incorrect username or password!";
}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <title>Login & Register</title>
</head>
<body>
<div>
    <a href="home.php" class="logoo">
        <img src="img/ln.jpg" alt="" width="60px" height="50px">
    </a> 
</div>

  <div class="container">
    <div class="form-container" id="form-container">

      <form id="login-form" class="form hidden">
        <h2>Login</h2>
        <div class="form-group">
          <label for="login-email">Email:</label>
          <input type="email" id="login-email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="login-password">Password:</label>
          <input type="password" id="login-password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn">Login</button>
        <p>Don't have an account? <span class="switch" id="go-to-register">Register</span></p>
      </form>

      <!-- Register Form -->
      <form id="register-form" class="form">
        <h2>Register</h2>
        <div class="form-group">
          <label for="register-email">Email:</label>
          <input type="email" id="register-email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="register-password">Password:</label>
          <input type="password" id="register-password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn">Register</button>
        <p>Already have an account? <span class="switch" id="go-to-login">Login</span></p>
      </form>
    </div>
  </div>
  <script src="js/login.js"></script>
</body>
</html>
