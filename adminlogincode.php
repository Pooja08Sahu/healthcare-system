<?php
//session_start();
$adname=$_POST['adname'];
$email=$_POST['email'];
$password=$_POST['pass'];
//echo $email.$password;
$conn=mysqli_connect("localhost","root","","collegewebsite");
$sel="select * from admintbl where email='$email'";
$query=mysqli_query($conn,$sel);
if(mysqli_fetch_array($query,MYSQLI_BOTH))
{
    header("location:inex.php");
}
else{
    echo "login failed";
}


?>