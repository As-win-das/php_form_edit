<!DOCTYPE html>
<head>
<title>register</title>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","hotel");
    
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
    
$query=mysqli_query($con,"Insert into chef(name,mobile,email,password) values('$name','$mobile','$email','$password')");    
    
mysqli_close($con);
header("Location:register.html");    
    
?>    



</body>