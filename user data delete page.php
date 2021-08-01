<?php
    require 'database.php';
    $id = 0;
     
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];
         
        
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM table_nodemcu  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: user data.php");
         
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="js/bootstrap.min.js"></script>



	<title>Delete : NodeMCU V3 ESP8266 / ESP12E with MYSQL Database</title>
</head>
<style>

body 
  {
background-image: url("k.jpeg");
  }
.button1{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
}
.button2{
  background-color: #e60000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;

}

.wrap{
  max-width:450px;
  border-radius: 20px;
  margin: auto;
  background:rgba(0,0,0,0.5);
  box-sizing: border-box;
  padding: 50px;
  color: white;
  margin-top: 100px;
  background-color: ;  
  font-size:20px;
  font-family:verdana; 
}
h2{
font-family:verdana;

}
h3{
font-family:verdana;
    
}

</style>
 
<body>
	<h2 align="center">AMAC SECURITY SYSTEM</h2>

			
			<h3 align="center">REMOVE USER</h3>
			


  <div class="wrap">
			<form class="form-horizontal" action="user data delete page.php" method="post">
				<input type="hidden" name="id" value="<?php echo $id;?>"/>
			    <p align="center" >Are you sure to delete User?</p>
				<div align="center">
					          <button type="submit" class="button button1">Yes</button>
                    <a class="button2" href="user data.php">No</a>
				</div>
			</form>
		</div>
                 
    
  </body>
</html>