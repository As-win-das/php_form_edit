<?php
session_start();

if(empty($_SESSION['id']))
{
    
     header("Location:login.php");
}
$reg=$_SESSION['id'];

$con=mysqli_connect("localhost","root","","hotel");
$query="Select * from chef where id=$reg";
$reslt=mysqli_query($con,$query);
$row=mysqli_fetch_array($reslt);
?>



<html>
<head>
<title>WELCOME</title>
</head>
<body>
    <center>
    <h2 style="color:violet">WELCOME <?php echo $row['name']; ?></h2><br>
    <h3><a href="logout.php" style="text-decoration:none ">Log Out</a></h3><br><br>
    </center>
    
   
</body>

</html>



