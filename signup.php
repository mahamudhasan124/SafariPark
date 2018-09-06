<?php
    if(isset($_POST['signupbutton'])){
        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $pass = $_POST['password_1'];
        $phone = $_POST['user_mobile'];
        
        include('config.php');
        $sql = " INSERT INTO users (username, userpassword, useremail, usermobile)
        		VALUES ('$name','$pass','$email','$phone')";
        if($conn->query($sql) ===TRUE){
        	//echo "inserted!";
        }
        else{
        	//echo "error!";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>SignUp</title>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
  <div id="header">
  	<h2>Signup</h2>
  </div>
	
    <form method="POST">
  
  	<div id="input-group">
  	  <label>Username</label>
          <input type="text" name="user_name" value="" required="" minlength="4">
  	</div>
  	<div id="input-group">
  	  <label>Email</label>
          <input type="email" name="user_email" value="" required="">
  	</div>
  	<div id="input-group">
  	  <label>Password</label>
          <input type="password" id="password_1" name="password_1" minlength="4" required="">
  	</div>
  	<div id="input-group">
  	  <label>Confirm password</label>
          <input type="password"  id="password_2" name="password_2" minlength="" required="">
  	</div>
        <div id="input-group">
  	  <label>Mobile</label>
          <input name="user_mobile" pattern="^([+]8{2})?01(1|8|9|5|6|7)[0-9]{8}$" required="">
  	</div>
  	<div id="input-group">
  	  <button type="submit" id="btn" name="signupbutton">SignUp</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
    <script>
        var password = document.getElementById("password_1");
        var confirm_password = document.getElementById("password_2");

          function validatePassword(){
            if(password.value != confirm_password.value) {
              confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
              confirm_password.setCustomValidity('');
            }
          }

          password.onchange = validatePassword;
          confirm_password.onkeyup = validatePassword;
    </script>
</body>
</html>