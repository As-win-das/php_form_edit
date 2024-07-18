<!DOCTYPE html>
<html>
<body>
    
<?php

$conn=mysqli_connect("localhost","root","","database");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$qualification=$_POST['qualification'];


$result=mysqli_query($conn,"insert into data (name,email,password,address,gender,qualification) values('$name','$email','$password','$address','$gender','$qualification')");

    
mysqli_close($conn);    
header("Location:value.html")
?>
    
</body>   
</html>    