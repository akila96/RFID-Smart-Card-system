<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
</head>

<style>

  body{
  background:url(Iot2.jpeg);
  background-size: cover;
  font-family: verdana; 
}
.wrap{
  max-width:410px;
  border-radius: 20px;
  margin: auto;
  background:rgba(0,0,0,0.6);
  box-sizing: border-box;
  padding: 30px;
  color: #fff;
  margin-top: 100px;  
}

h1{

text-align: center;
}


input,
.btn {
  width: 90%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 3px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; 
}

input:hover,
.btn:hover {
  opacity: 1;
}
.registerbtn{
    width: 97%;
    box-sizing: border-box;
    padding: 10px 0;
    margin-top: 30px;
    outline: none;
    border: none;
    background:#60adde;
    opacity:0.7;
    border-radius: 10px;
    font-size: 20px;
    color: #fff;
}
button:hover{
    background:#003366; 
    opacity: 0.7;
}

h3{

  font-size:60px;
  color: #fff;
  font-family: Verdana;
  text-align: center;

}

h4{
  font-family: Verdana;
  color: #f2f2f2;
  text-align: center;
  
}

</style>


<body>
<?php
require('db.php');

if (isset($_REQUEST['username'])){
        
    $username = stripslashes($_REQUEST['username']); 
    $username = mysqli_real_escape_string($con,$username);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);

    $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/><h4>Click here to</h4><a href='login.php'><h4>Login</h4></a></div>";
        }
    }
    
    else{
?>
<div class="wrap">
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />

 <button type="submit" class="registerbtn">Save</button>
</form>
</div>
<?php } ?>
</div>
</body>
</html>