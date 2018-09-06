<?php
	session_start();
	if(isset($_SESSION['msg'])){
		$name = $_SESSION['msg'];
                
	}
	else{
		header("Location:index.php");
	}
        
	function viewOrder(){
		include('config.php');
		$sql = "SELECT username, useremail, message FROM messages";
		$result = $conn->query($sql);
		$i = 1;
		if($result->num_rows > 0){
			while ($raw = $result->fetch_assoc()) {
				$Uname = $raw['username']; 
				$mail = $raw['useremail'];
				$msg = $raw['message']; ?>
				<tr>
					<td><?php echo $i ;?></td>
					<td><?php echo $Uname ;?></td>
					<td><?php echo $mail ;?></td>
					<td><?php echo $msg ;?></td>
				</tr> <?php
				$i++;
			}
		}
		$conn->close();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ordered List</title>

	<style>
		table, th, td {
		    border: 1px solid black;
		    border-collapse: collapse;
		}
	</style>
</head>
<body>
<div style="margin: 100px auto; text-align: center;">
	<h1>Ordered Items</h1>
	<table width="80%" align="center" border="1px">
		<th>#</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Message</th>
		<?php viewOrder(); ?>


	</table>
</div>

</body>
</html>