<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
* {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }
    

    nav .logo {
      font-size: 22px;
      font-weight: bold;
      padding-left: 30px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
    }

    body {
      background: #f0f8ff;
    }

    /* Navbar */
    nav {
      width: 100%;
      background-color: #09a188ff;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
    }
    nav ul li a {
      text-decoration: none;
      color: white;
      font-size: 16px;
      font-weight: 500;
      transition: 0.3s;
    }

    nav ul li a:hover {
      color: #ffdd00;
    }

        
        </style>
</head>
<body>
    <nav>
    <div class="logo">🩺 HealthCare System</div>

    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="appointmentform.php">Appointment</a></li>
      <li><a href="contact.php">Support</a></li>
      <li><a href="registration.php">Registration</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>

</body>
</html>