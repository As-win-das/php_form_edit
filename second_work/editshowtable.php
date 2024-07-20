<!DOCTYPE html>
<html lang="en">
<head>
<title>editshowtable</title>    
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","database");

$id=$_GET['id'];

$query="Select * from data where id='$id' ";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result))
{
 ?> 
<form action="updateeditshowtable.php?id=<?php echo $row["id"]; ?>" method="post"><br>
    
 Name: <input type="text" name="name" value="<?php  echo $row['name']?>" ><br>
Email: <input type="text" name="email" value="<?php  echo $row['email']?>" ><br>
Password: <input type="password" name="password" value="<?php  echo $row['password']?>" ><br>
Address: <input type="text" name="address" value="<?php  echo $row['address']?>" ><br>
Gender: male<input type="radio" name="gender"   value="male" <?php echo  ($row['gender']=='male')?'checked':'' ?> >
      female<input type="radio" name="gender" value="female" <?php   echo ($row['gender']=='female')?'checked':'' ?> ><br>
Qualification:<select name="qualification">
   <option value="degree" <?php if($row['qualification']=='degree') { ?> selected="selected" <?php }?>>Degree</option>
   <option value="plus_two" <?php if($row['qualification']=='plus_two') { ?>selected="selected" <?php } ?>>Plus Two</option>
   <option value="others"   <?php  if($row['qualification']=='others') { ?> selected="selected" <?php }?>>others</option>
            </select><br>
    <input type="submit" value="submitt">
<?php        
 }
?>    
 
</form>    
        
</body>



</html>