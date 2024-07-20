<!DOCTYPE html>
<html>
<head>    
</head>
<body>
<?php  
$con=mysqli_connect("localhost","root","","hotel");
    
$emp_name=$_POST['emp_name'];
$emp_job=$_POST['emp_job'];
    
$salary=$_POST['salary'];     

$query="Insert into details(emp_name,emp_job) values('$emp_name','$emp_job')"; 
    
    
$result=mysqli_query($con,$query);

    $lastid = $con->insert_id;
    $queryy="Insert into employee_salary(emp_id,salary) values('$lastid','$salary')"; 
    
 mysqli_query($con,$queryy);
    
mysqli_close($con);
header("Location:details.html");    
    
?>    
</body>
</html>