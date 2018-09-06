<?php
	$error="";
	if(isset($_POST['login'])){
		$uname = $_POST['adminname'];
		$pass = $_POST['adminpassword'];
		include ('config.php');

		$sql = "SELECT * FROM admin WHERE username = '$uname' AND password ='$pass' ";
		$result = $conn->query($sql);
		if ($result->num_rows ==1) {
			$error="";
			session_start();
			$_SESSION['msg'] = $uname;
			header("Location: welcome.php");
		}
		else{
			$error = "password or username is incorrect";
		}


	}
?>



<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

    <form action="" method="post">
        <label >UserName</label>
	        <input type="text" name="adminname" required></input><br>
		<label >Password</label>
	        <input type="password" name="adminpassword" required></input><br>
	        <input  type="submit" value="Login" name="login"></input>
	        <label> <?php echo $error; ?> </label>
	</form>

</body>
</html>