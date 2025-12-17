<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    


    .main-container{
     width: 100%;
     height: 300px;
    background-image: url("image/background.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    border-radius:12px;

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

    nav {
      width: 100%;
      background-color: #09a188ff;
      padding: 10px 21px;
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


.appointment-section{
  display: flex;
  justify-content: space-between;
  gap: 40px;
  padding: 80px;
}

/* LEFT SIDE */
.appointment-left{
  width: 40%;
}

.appointment-left h2{
  font-size: 36px;
  color:#222;
}

.appointment-left h2 span{
  color:#3fd0a7;
}

.appointment-left p{
  color:#666;
  margin: 15px 0 30px;
}

.working-time{
  margin-top: 20px;
}

.working-time h4{
  margin-bottom:10px;
}

.working-time p{
  margin:5px 0;
  color:#444;
}

/* RIGHT SIDE FORM */
.appointment-form{
  width: 80%;
  background:white;
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

.appointment-form p{
  font-size:14px;
  color:#666;
  margin-bottom:20px;
}

.form-row{
  display:flex;
  gap:20px;
  margin-bottom:15px;
}

.form-row input, .form-row select{
  width:100%;
  padding:12px;
  border:1px solid #ddd;
  border-radius:8px;
  outline:none;
}

.appointment-form button{
  width:100%;
  padding:14px;
  border:none;
  border-radius:30px;
  background: linear-gradient(to right, #1fa2a6, #6ddf6d);
  color:white;
  font-size:16px;
  cursor:pointer;
}

  </style>

</head>
<body>

<div>
     <nav>
    <div class="logo">🩺 HealthCare System</div>

    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="appointment.php">Appointment</a></li>
      <li><a href="contact.php">Support</a></li>
      <li><a href="registration.php">Registration</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>
</div>

<div class=" main-container">
<div>
  <h1 style="align-items:center; padding-left: 80px; font-width:bold; padding-top:130px;"><span>Book</span><span style="color:green"> appointment </span></h1>
  <p style="align-items:center; font-width:bold; padding-left: 80px; "><span style="">          HOME / </span><span style="color:green">BOOK APPOINTMENT</span></p>
</div>
</div>

<!---Book Appointment-->

<div class="appointment-section">
  <!-- LEFT -->
  <div class="appointment-left">
    <h2>Book an <span>appointment</span></h2>
    <p>
      Take the first step toward your personal and professional growth.
      Schedule a session today to explore.
    </p>

    <div class="working-time">
      <h4>Working Time</h4>
      <p>Mon - Fri: 9:00am - 5:00pm</p>
      <p>Saturday: 10:00am - 6:00pm</p>
      <p>Sunday: Closed</p>
    </div>
  </div>

  <!-- RIGHT -->

  <form action="appointmentcode.php" method="POST">
  <div class="appointment-form">
    <p>
      Fill out the form below to request your appointment.
      We’ll confirm your time and send you a reminder.
    </p>

    <div class="form-row">
      <input type="text" placeholder="Enter your name" name="name">
      <input type="email" placeholder="Enter your email" name="email">
    </div>

    <div class="form-row">
      <input type="text" placeholder="Enter your mobile no." name="mobile">
      <input type="text" placeholder="Enter your Address" name="address">
      </div>

<div class="form-row">
      <input type="text" placeholder="Enter your record no." name="record">
      <input type="text" placeholder="Enter your gender" name="gender">
      </div>



    <div class="form-row">
      <input type="date" name="date">
      <select name="time">
        <option>Choose Time</option>
        <option>09:00 AM</option>
        <option>11:00 AM</option>
        <option>02:00 PM</option>
        <option>04:00 PM</option>
      </select>
    </div>

    <button>Book An Appointment</button>
  </div>

</form>

</div>




<?php
include 'footer.php';
?>
</body>
</html>