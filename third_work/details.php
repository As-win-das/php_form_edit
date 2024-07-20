<!DOCTYPE>
<html>
<head>
</head>
<body>
    <center>
        <table border="2px black solid">   
            <tr>
                <h4>employee details with salary</h4>    
                <th>emp_name</th> 
                <th>emp_job</th>
                <th>emp_id</th>
                
                <th>salary</th>
            </tr>
            
            
<?php  
$conn=mysqli_connect("localhost","root","","hotel");
$query= "SELECT * FROM details JOIN employee_salary ON details.emp_id=employee_salary.emp_id";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
    {
?>
            <tr>
                <td><?php echo $row['emp_name'] ?> </td>
                <td><?php echo $row['emp_job']?></td>
                <td><?php echo $row['emp_id']?></td> 
                <td><?php echo $row['salary']?></td>
    
            </tr>
    
       
<?php    
}        
?>    

            
        </table>
    </center>
    
    
    
    
     <center>
        <table border="4px black solid">     
            <tr>
                <h4>salary details</h4>
                <th>emp_id</th>
                <th>salary</th>    
                
            </tr> 
            

<?php  
$con=mysqli_connect("localhost","root","","hotel");
$querry="Select * from employee_salary";
$resultt=mysqli_query($con,$querry);
while($ro=mysqli_fetch_array($resultt))
{
?>
<tr>
<td><?php echo $ro['emp_id'] ?> </td>
<td><?php echo $ro['salary']?></td>
   
    
</tr>
    
       
<?php    
}        
?>        
    
 </table>     
    </center>
    
    
   
       
    
</body>
</html>    