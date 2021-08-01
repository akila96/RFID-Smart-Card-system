<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    $pdo = Database::connect();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM table_nodemcu where id = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($id));
  $data = $q->fetch(PDO::FETCH_ASSOC);
  Database::disconnect();
?>


<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    
    
    <script src="js/bootstrap.min.js"></script>
    
<style>
  body 
  {
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



* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding:10px;
  width: 46%;
  margin:auto;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 10px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

.select{
  width: 100%;
  padding: 10px;
  margin: 5px 0 10px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;


}

.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.9;
  width: 100%; 

}

.registerbtn:hover {
  opacity:1;
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
  border-radius:10px;

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
  border-radius:10px;
}



</style>
    
  <title>UserData Edit</title>
  </head>
  
  <body>

    <h2 align="center">AMAC SECURITY SYSTEM</h2>

    <div class="Navigation">
           <a href="read tag.php">Read Tag ID</a>
           <a href="registration.php">Registration</a>
           <a href="user data.php">User Data</a>
           <a href="login.php">Login</a>
            
    </div>      
    
     <h2 align="center">Edit User Data</h2>
     <p id="defaultGender" hidden><?php echo $data['gender'];?></p>

  <form class="form-horizontal" action="user data edit tb.php?id=<?php echo $id?>" method="post">


          <div class="container">
            <label class="control-label">ID</label>
            <div class="controls">
              <input name="id" type="text"  placeholder="" value="<?php echo $data['id'];?>" readonly>
            </div>
          </div>
          
          <div class="container">
            <label class="control-label">Name</label>
            <div class="controls">
              <input name="name" type="text"  placeholder="" value="<?php echo $data['name'];?>" required>
            </div>
          </div>
          
          <div class="container">
            <label class="control-label">Gender </label>
            <div class="controls">
              <select name="gender" id="mySelect" style="height:30px; width:593px;">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          
          <div class="container">
            <label class="control-label">Email Address</label>
            <div class="controls">
              <input name="email" type="text" placeholder="" value="<?php echo $data['email'];?>" required>
            </div>
          </div>
          
          <div class="container">
            <label class="control-label">Mobile Number</label>
            <div class="controls">
              <input name="mobile" type="text"  placeholder="" value="<?php echo $data['mobile'];?>" required>
            </div>
          </div>
          
          <div class="container">
            <button type="submit" class="button1">Update</button>
            <a class="button2" href="user data.php">Back</a>
          </div>
        </form>
   <script>
      var g = document.getElementById("defaultGender").innerHTML;
      if(g=="Male") {
        document.getElementById("mySelect").selectedIndex = "0";
      } else {
        document.getElementById("mySelect").selectedIndex = "1";
      }
    </script>   
 
</body>
</html>