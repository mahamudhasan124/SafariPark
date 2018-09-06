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
		$sql = "SELECT u.username,p.name, p.price, a.quantity
				FROM ((addtocart a INNER JOIN package P ON p.id = a.p_id) INNER JOIN users u ON u.user_id = a.u_id)";
		$result = $conn->query($sql);
		$i = 1;
		if($result->num_rows >0){
			while ($raw = $result->fetch_assoc()) {
				$Uname = $raw['username']; 
				$Oname = $raw['name'];
				$iPrice = $raw['price'];
				$iQuantity = $raw['quantity']; ?>
				<tr>
					<td><?php echo $i ;?></td>
					<td><?php echo $Uname ;?></td>
					<td><?php echo $Oname ;?></td>
					<td><?php echo $iPrice ;?></td>
					<td><?php echo $iQuantity ;?></td>
					<td><?php echo $iPrice*$iQuantity ;?></td>
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
		<th>Order Item</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total Amount</th>
		<?php viewOrder(); ?>


	</table>
</div>

</body>
</html>