

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
    crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
  crossorigin="anonymous"></script>


    <style>

         body{
         

  background: linear-gradient(to right, #682d77, #6993db, #83d5ee);
}



.signup{
background-color: #141e30;
padding: 40px;
border-radius: 48px;
box-shadow: 0 0 20px rgb(0 0 0 0.29);
height:720px;
width:560px;
text-align:center;
border: 1px dotted rgb(34, 32, 32);
color:white;
margin-top: 20px;
}

button {
      background-color: #0dcaf0;
      color: white;
      border: none;
      cursor: pointer;
      padding: 11px 50px;
    }

        </style>
</head>
<body>

<?php
include 'header.php';
?>

<div class="b-example-divider"></div>

<center>
<div class="signup">

    <h1 style="color:red; font-family:cursive">Signup Page</h1>
<form action="registrationcode.php" method="POST">
User Name: 
<br>
<input type="text" placeholder="Enter Your Name" name="name" size="50px" required>
<br><br>
Email:    
<br>
<input type="email" placeholder="Enter Email" name="email" size="50px" required>
<br><br>
Password: 
<br>
<input type="password" placeholder="Enter Your Password" name="password" size="50px" required>
<br><br>
Mobil No.:<br>
<input type="text" placeholder="Enter Your Mobile No." name="mobile" size="50px" required>
<br><br>
Address:
<br>
<input type="text" placeholder="Enter Your Address" name="address" size="50px" required>
<br><br>

Age: <br>
<input type="text" placeholder="Age" name="age" size="50px" required><br><br>

<button type ="submit" class="btn" name="register">Register</button>
<br><br>
Already have an account?<a href="login.php">login</a>

</form>
</center>
</div>

<?php
include 'footer.php';
?>
</body>
</html>




