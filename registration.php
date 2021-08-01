 
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


    <script src="jquery.min.js"></script>

    <script>
       $(document).ready(function(){
         $("#getUID").load("UIDContainer.php");
        setInterval(function() {
          $("#getUID").load("UIDContainer.php");
        }, 500);
      }); 
    </script>
   
    
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
  color:white;
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
  border-radius:10px;

}

.registerbtn:hover {
  opacity:1;
}



</style>
    
  <title>Registration</title>
  </head>
  
  <body>

    <h2 align="center">AMAC SECURITY SYSTEM</h2>

    <div class="Navigation">
           <a href="read tag.php">Read Tag ID</a>
           <a class="active" href="registration.php">Registration</a>
           <a href="user data.php">User Data</a>
           <a href="login.php">Login</a>
            
    </div>      
    
     <h2 align="center">Registration Form</h2>

    <form class="form-horizontal" action="insertDB.php" method="post" >
          <div class="container">
            <label class="control-label">ID</label>
            <div class="controls">
              <textarea name="id" id="getUID" placeholder="Please Tag your Card / Key Chain to display ID" rows="2" cols="82" required></textarea>
            </div>
          </div>
           
          <div class="container">
            <label class="control-label">Name</label>
            <div class="controls">
              <input id="div_refresh" name="name" type="text"  placeholder="" required>
            </div>
          </div>
          
          <div class="container">
            <label class="control-label">Gender</label>
            <div class="controls">
              <select name="gender" style="height:30px; width:593px;">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          
          <div class="container">
            <label class="control-label">Email Address</label>
            <div class="controls">
              <input name="email" type="text" placeholder="" required>
            </div>
          </div>
          
          <div class="container">
            <label class="control-label">Mobile Number</label>
            <div class="controls">
              <input name="mobile" type="text"  placeholder="" required>
            </div>
          </div>
          
          <div class="container">
            <button type="submit" class="registerbtn">Save</button>
                    </div>
         </form>
     
 
</body>
</html>