<?php


$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password);

		mysqli_select_db($conn,"Safaripark");

		// Check connection
		if (!$conn) {
		    die("Connection failed: <br><br>" . mysqli_connect_error());
		}
		//echo "Connected successfully <br><br>";

                /*
	session_start();
        require_once "Facebook/autoload.php";
	
        
        $FB = new \Facebook\Facebook([
		'app_id' => '1927362460910210',
		'app_secret' => 'e89431dce4e88ee39326eb6c89009fa6',
		'default_graph_version' => 'v2.12'
	]);

	$helper = $FB->getRedirectLoginHelper();
        
        require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("458402312798-iev0m991rie271kdq1vbn531gojjhnhn.apps.googleusercontent.com");
	$gClient->setClientSecret("eG0hUmJB7fKNPa2mrRzcNX_N");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/GoogleLogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
                 * 
                 */
?>
