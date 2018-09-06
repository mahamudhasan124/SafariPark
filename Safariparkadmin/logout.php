<?php
	session_start();
	if(isset($_SESSION['msg'])){
		$name = $_SESSION['msg'];
                session_destroy();
                header("Location:index.php");

	}
	else{
                session_destroy();

		header("Location:index.php");
	}
?>