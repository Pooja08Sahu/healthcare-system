<?php

$name=$_POST['name'];

$email=$_POST['email'];

$mobile = $_POST['mobile'];
$address = $_POST['address'];

$message=$_POST['message'];

$conn=mysqli_connect("localhost","root","","helthcare");

$ins="insert into contact (name,email,mobile,address,message) 
values('$name','$email','$mobile','$address','$message')";

$res=mysqli_query($conn,$ins);

if($res)
    {
     echo "form filled";
     
    }
   
else{
    echo "Try again";
}


?>


