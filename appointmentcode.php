<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$record = $_POST['record'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$time = $_POST['time'];


$conn=mysqli_connect("localhost","root","","helthcare");

$ins="insert into appointment (name,email,mobile,address,record,gender,date,time) 
values('$name','$email','$mobile','$address','$record','$gender','$date','$time')";

$res = mysqli_query($conn,$ins);

if($res)
    {
     echo "form filled";
     
    }
else{
    echo "Try again";
}
?>
