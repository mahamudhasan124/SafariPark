<?php
  
  $error="";
  if(isset($_POST['sign_in_btn'])){
		$uname = $_POST['username'];
		$pass = $_POST['userpassword'];
		include ('config.php');

		$sql = "SELECT user_id FROM users WHERE username = '$uname' AND userpassword = '$pass' ";
		$query = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($query);
		if ($row == 1) {
			$error="";
      while ($data = $query->fetch_assoc()) {
        session_start();
        $_SESSION['name'] = $uname;
        $_SESSION['userID'] = $data['user_id'];
        echo "user id = ".$data['user_id'];
        header("Location: index.php");
        }
		}
		else{            
			$error = "password or username is incorrect";
		}
    mysqli_close($conn);
	}
?>
  



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SignIn</title>
  
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  
  
  <link rel="stylesheet" href="../../node_modules/font-awesome/css/font-awesome.min.css" />
  
  <link rel="stylesheet" href="css/style.css">
 
  <link rel="shortcut icon" href="../../images/favicon.html" />
</head>

<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              <div class="notification">
			
		</div>
		<div class="re">
	
		</div>
              <form action="" method="post">
                <div class="form-group">
                  <label>Username *</label>
                  <input type="text" name="username" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="password" name="userpassword" class="form-control p_input">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="icheck-square">
                    <input tabindex="1" type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                    <button type="submit"style="margin-left: 0px" class="btn btn-primary btn-block enter-btn" name="sign_in_btn" value="Sign in">Sign in</button>
                </div>
               <div class="d-flex justify-content-center mb-4">
                   <input type="button" onclick="window.location = '<?php echo $fbloginURL ?>';" style="margin-left: 0px" class="facebook-login btn btn-facebook mr-2" value="Facebook">
                   
                   <input type="button" onclick="window.location = '<?php echo $loginURL?>'" style="margin-left: 0px" class="google-login btn btn-google" value="Google+">
                </div> 
                  <small  class="text-center d-block">Don't have an Account?<a href="signup.php"> Sign Up</a></small>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
  <script src="../../js/settings.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
</html>
