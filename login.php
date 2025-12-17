
<?php
session_start();

if(isset($_SESSION['user']))

    {
        header("location: dashboard.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Healthcare</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f1f8e9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      width: 350px;
    }
    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #0077b6;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      width: 100%;
      padding: 12px;
      border: none;
      background: #0077b6;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover { background: #005f87; }
    p { text-align: center; margin-top: 10px; }
    a { color: #0077b6; text-decoration: none; }
  </style>
</head>
<body>

  <div class="form-container">

    <h2>Login</h2>
    <form action="logincode.php" method="post">
      <input type="email" placeholder="Email" name="email" required>
      <input type="password" placeholder="Password" name="password" required>
      <button type="submit">Login</button>
    </form>
    <p>Don’t have an account? <a href="registration.php">Register</a></p>
  </div>
</body>
</html>
