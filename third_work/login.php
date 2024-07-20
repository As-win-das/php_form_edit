<?php
session_start();
if(isset($_REQUEST['submit'])){
    
$con=mysqli_connect("localhost","root","","hotel");
    
$email=$_POST['email'];
$password=$_POST['password'];    


$query="Select * from chef where email='$email'and password='$password' ";
$result=mysqli_query($con,$query);

//

if(mysqli_num_rows($result)>0)
{
    $row=mysqli_fetch_array($result);
    $id=$row['id'];
    $_SESSION['id']=$id;
    header("Location:welcome.php");
}
else{
    $msg="Invalid Username or Password";
}
}
?>

<!DOCTYPE html>
<head lang="en">
<title>login</title>    
</head>
<body>
<center>
<span style="color:red;"><?php
if(isset($msg))
    echo $msg;
    ?>

    
    
</span>
    
<form action="" method="POST">
<h2 style="color:aliceblue">Login</h2><br><br>
Email : <input type="text" name="email"><br><br>
Password : <input type="password" name="password"><br><br>
    
<input type="submit" value="Submit" name="submit" style="background-color:green";>    
    
    
</form>    
</center>


</body>