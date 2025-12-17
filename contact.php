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
  background-color: #141e30;


}


  .form{
            border: 1px dotted rgb(34, 32, 32);
            background: darkblue;
            width: 800px;
            height: 500px;
            margin: 100px auto;
            padding: 20px;
            text-align: center;
            background-color: white;
            box-shadow: 0 0 90px rgba(0,0,0,0.45);
            border-radius: 10px;
            border-radius: 60px;
  }
textarea{

  height:100px;
  width:420px;
  padding: 10px;
  font-size: 16px;
  resize: none;
}

button{
  margin: 10px 5px;
  padding: 10px;
  font-size: 20px;
  cursor: pointer;
}
</style>
</head>
<body>
    
<?php
 
 include 'header.php';
?>

<div class="form">
  <form action="contactcode.php" method="POST">
<h1 style="font-family:cursive">Contact Us</h1>
<br>
<input type="text" placeholder="Fullname" size="50px" name="name">
<br><br>
<input type="email" placeholder="Email" size="50px" name="email">
<br><br>
<input type="text" placeholder="Contact number" size="50px" name="mobile">
<br><br>
<input type="text" placeholder="Address" size="50px" name="address">
<br><br>
<textarea type="text" placeholder="Message" size="50px" name="message"></textarea>
<br>
<button type="submit" class="btn btn-warning" size="20px">SUBMIT</button>
  </form>
</div>


<?php
include 'footer.php';
?>
</body>
</html>