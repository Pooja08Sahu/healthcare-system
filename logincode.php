<?php
//session_start();

$email = $_POST['email'];
$password = $_POST['password'];
//echo $email.$password;

$conn = mysqli_connect("localhost","root","","helthcare");
$sel = "select * from registrationtbl where email='$email' AND password='$password'";
$query = mysqli_query($conn,$sel);

if(mysqli_fetch_array($query,MYSQLI_BOTH)){
   echo "login success";
}
else{
   echo "filled data not match";
}

?>