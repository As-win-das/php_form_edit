<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<center>
<table border="2px">
    <tr>
        <th>Name</th>
        <th>Email</th>    
        <th>Password</th>    
        <th>Address</th>    
        <th>Gender</th> 
        <th>Qualification</th>  
        <th>ID</th>      
    </tr>    

<?php
    
$con=mysqli_connect("localhost","root","","database");
    
$query="Select * from data";
$result=mysqli_query($con,$query);
while($ro=mysqli_fetch_array($result))

{
           
?> 
<tr>
<td><?php echo $ro['name']; ?></td>
<td><?php echo $ro['email']; ?></td>
<td><?php echo $ro['password'] ?></td>
<td><?php echo $ro['address']; ?></td>        
<td><?php echo $ro['gender']; ?></td>    
<td><?php echo $ro['qualification']; ?></td>
<td><?php echo $ro['id']; ?></td>  
<td><a href="editshowtable.php?id=<?php echo $ro['id']; ?>"> Edit  </a></td>    
    </tr>    

<?php    
    
}
    
    
?>    
    
   
</table>
</center>     
    
    
</body>
</html>