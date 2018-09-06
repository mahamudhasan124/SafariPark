<?php
	session_start();
	if(isset($_SESSION['msg'])){
		$name = $_SESSION['msg'];
                
	}
	else{
		header("Location:index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
</head>
<body>

    <div style="text-align: center;padding: 3px;margin: 30px">
        <button style="widows: 150px;height: 50px;background-color: yellowgreen " onclick="orderPage()">Ordered List</button><br>

        <button style="widows: 150px;height: 50px;background-color: yellowgreen" onclick="messageCheck()">Message</button><br>
    
        <button style="widows: 150px;height: 50px;background-color: yellowgreen" onclick="packageCheck()">Package</button><br>
    <button style="widows: 150px;height: 50px;background-color: yellowgreen" onclick="logout()">Logout</button>

    
    </div>
    
    <script>
        function orderPage(){
            window.location = "orderedlist.php";
        }
        function packageCheck(){
            window.location = "package.php";
        }

        function messageCheck(){
            window.location = "message.php";
        }
        
        function logout(){
            window.location = "logout.php";
        }

    </script>

</body>
</html>