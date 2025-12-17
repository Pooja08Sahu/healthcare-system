
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$age = $_POST['age'];


$conn=mysqli_connect("localhost","root","","helthcare");

$ins = "insert into registrationtbl (name,email,password,mobile,address,age)
 values('$name','$email','$password','$mobile','$address','$age')";

$res=mysqli_query($conn,$ins);

if($res)
  {
  // echo "data Save";
  header ('location:login.php');
}
else{
    echo "data not save";
}

?>










?>