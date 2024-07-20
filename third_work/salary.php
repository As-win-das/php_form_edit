 <!DOCTYPE>
<html>
<head>
</head>
<body>
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