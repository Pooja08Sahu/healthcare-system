<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Healthcare Website</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
  crossorigin="anonymous"></script>
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

    /* Hero Section */
    .hero {
      text-align: center;
      padding: 100px 20px;
      background: url('https://img.freepik.com/free-photo/medical-banner-with-doctor-wearing-gloves_23-2149611199.jpg') no-repeat center/cover;
      color: white;
    }

    .hero h1 {
      font-size: 48px;
      margin-bottom: 20px;
      text-shadow: 2px 2px 5px black;
    }

    .hero p {
      font-size: 20px;
      margin-bottom: 30px;
    }

    .hero button {
      padding: 12px 25px;
      font-size: 18px;
      background: #ffdd00;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .hero button:hover {
      background: #ffb703;
    }

    /* Footer */
    footer {
      text-align: center;
      background: #023047;
      color: white;
      padding: 15px;
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav>
    <div class="logo">   🏥 HealthCare System</div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="appointmentform.php">Appointment</a></li>
      <li><a href="contact.php">Support</a></li>
      <li><a href="registration.php">Registration</a></li>
      <li><a href="login.php">Login</a></li>
    </ul> 
  </nav>

  <!-- Slider (Bootstrap Carousel) -->
  <div id="abc" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#abc" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#abc" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#abc" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#abc" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#abc" data-bs-slide-to="4"></button>
      <button type="button" data-bs-target="#abc" data-bs-slide-to="5"></button>
      <button type="button" data-bs-target="#abc" data-bs-slide-to="6"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/1.png" class="d-block w-100" style="height:350px;">
      </div>
      <div class="carousel-item">
        <img src="image/2.png" class="d-block w-100" style="height:350px;">
      </div>
      <div class="carousel-item">
        <img src="image/3.png" class="d-block w-100" style="height:350px;">
      </div>
      <div class="carousel-item">
        <img src="image/4.png" class="d-block w-100" style="height:350px;">
      </div>
      <div class="carousel-item">
        <img src="image/5.png" class="d-block w-100" style="height:350px;">
      </div>
      <div class="carousel-item">
        <img src="image/appointment2.jpg" class="d-block w-100" style="height:350px;">
      </div>
      <div class="carousel-item">
        <img src="image/appointment1.jpg" class="d-block w-100" style="height:350px;">
      </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#abc" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#abc" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Your Health, Our Priority</h1>
    <p>Best medical care and services at your fingertips.</p>
    <button>Book Appointment</button>
  </section>

  <!-- Footer -->

  
  <footer>
    <p>© 2025 HealthCare. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>


</html>