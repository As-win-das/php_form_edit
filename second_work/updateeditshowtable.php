<?php

$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$qualification=$_POST['qualification'];

//print_r($id);die();
$conn=new mysqli("localhost","root","","database");

$sqli="UPDATE data SET name='$name',email='$email',password='$password', address='$address', gender='$gender',  qualification='$qualification' WHERE id='$id' ";

$result= $conn->query($sqli);

$conn->close();
header("Location:showtable.php");





?>