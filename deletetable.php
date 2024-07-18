<?php
$conn = mysqli_connect("localhost","root","","member");
 
$no=$_GET['no'];
//print_r($no);die();
$query = "DELETE FROM members WHERE no=$no"; 
$result = mysqli_query($conn,$query) or die (mysqli_error());

header("Location:tablephp.php");
 
?>