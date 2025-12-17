
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
  body{
  background: linear-gradient(to right, #682d77, #6993db, #83d5ee);
}

.login{
background-color: #141e30;
padding: 40px;
border-radius: 48px;
box-shadow: 0 0 20px rgb(0 0 0 0.29);
height:390px;
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


<center>

    <div class="login">
    <h1 style="color:red; font-family:cursive;">Admin Login</h1>
    <br>
    <form action="admincode.php" method="post">
Adname: <input type="name" placeholder="Enter Your name" name="adname" required>
<br><br>
Email: <input type="email" placeholder="Enter Your Email" name="email" required>
<br><br>
Password: <input type="password" placeholder="Enter Your Password" name="pass" required>
<br><br>
<button>Sumbit</button>
    </form>
</center>
</div>



</body>
</html>