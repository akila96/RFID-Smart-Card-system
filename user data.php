
<?php
  $Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
  file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
   
    <script src="js/bootstrap.min.js"></script>

		
<style>	
				
body {
background-image: url("k.jpeg");
}

.Navigation {
  background-color: #333;
  overflow: hidden;
  width: 45%;
  margin:auto;
  
}

.Navigation a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.Navigation a:hover {
  background-color: #ddd;
  color: black;
}

.Navigation a.active {
  background-color: #4CAF50;
  color: white;
}
.button1{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 2px 19px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:5px;
}

.button2{
  background-color: #f44336; 
  border: none;
  color: white;
  padding: 2px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:5px;
}

.container {
  padding:10px;
  width: 45%;
  margin:auto;
  color:white;
}


		
		</style>
		
		<title>User Data : NodeMCU V3 ESP8266 / ESP12E with MYSQL Database</title>
	</head>
	
	<body>
		<h2 align="center">AMAC SECURITY SYSTEM</h2>
		<div class="Navigation">
           <a href="read tag.php">Read Tag ID</a>
           <a href="registration.php">Registration</a>
           <a class="active" href="user data.php">User Data</a>
           <a href="login.php">Login</a>
            
        </div> 
		<br>
		<div class="container">
            <div class="row">
                <h3 align="center">User Data Table</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered" cellpadding="3" border="1" width="610">
                  <thead>
                    <tr bgcolor="#10a0c5" color="#FFFFFF">
                      <th>Name</th>
                      <th>ID</th>
					            <th>Gender</th>
					            <th>Email</th>
                      <th>Mobile Number</th>
					            <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM table_nodemcu ORDER BY name ASC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['id'] . '</td>';
                            echo '<td>'. $row['gender'] . '</td>';
							              echo '<td>'. $row['email'] . '</td>';
							              echo '<td>'. $row['mobile'] . '</td>';
							              echo '<td><a class="button1" href="user data edit page.php?id='.$row['id'].'">Edit</a>';
              echo ' ';
              echo '<a class="button2" href="user data delete page.php?id='.$row['id'].'">Delete</a>';
              echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
				</table>
			</div>
		</div> 
	</body>
</html>