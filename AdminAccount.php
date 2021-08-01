<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>

  <style>

  body{
  background:url(Iot2.jpeg);
  background-size: cover;
  font-family: verdana; 
}

.wrap{
  max-width:450px;
  border-radius: 20px;
  margin: auto;
  background:rgba(0,0,0,0.6);
  box-sizing: border-box;
  padding: 35px;
  color: #fff;
  margin-top: 100px;  
}

h1{

text-align: center;
}

.table{
  color: #f2f2f2;
  margin: 15px;
  
  
}

</style>
</head>
<body>

<div class="wrap">
   <h1>Admin Details</h1>

<table border="1">
  <tr>
    <td><h3>Admin Name:</h3></td>
    <td><h3>Admin Email:</h3></td>
    
  </tr>

<?php

include "db.php"; 

$records = mysqli_query($con,"select * from users "); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['username']; ?></td>  
    <td><?php echo $data['email']; ?></td>
   
  </tr> 
<?php
}
?>
</table>

  <?

    php mysqli_close($con); 

  ?>

</body>
</html>