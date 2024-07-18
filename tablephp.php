<!DOCTYPE html>
<html>
<body>

<table border="3px black">
    <tr>
      
    <th>Name</th>
    <th>Phone_Number</th>
    <th>Address</th>
    <th>Gender</th>    
    </tr>
    
<?php
$conn=mysqli_connect("localhost","root","","member");
    $query="select * from members";
    $result=mysqli_query($conn,$query);
    while($roww=mysqli_fetch_array($result))
    {
?>
    <tr>
       
    <td><?php echo $roww['name'];  ?></td>
    <td> <?php  echo $roww['phone_number']; ?></td>
    <td> <?php echo $roww['address']; ?></td>
    <td> <?php echo $roww['gender']; ?> </td>
    <td><a href="deletetable.php?no= <?php echo $roww['no']; ?>"> Delete</a></td>
    <td><a href="editthetable.php?no=<?php echo $roww['no']; ?>"> Edit  </a></td>
      
        
    </tr>
    
    <?php     }  ?>
 
       
</table>    
    
</body>
</html>