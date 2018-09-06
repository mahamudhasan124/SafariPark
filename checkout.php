<?php
	session_start();
	$userid;
	if(isset($_SESSION['name'])){
      $userid = $_SESSION['userID'];
  	
  	}

    else{ ?>
      <script>
          alert("please login first");
      </script>
    <?php
    }

    function viewOrder(){
    	$userid = $_SESSION['userID'];
    	include('config.php');
		$sql = "SELECT a.id, p.name, p.price, a.quantity
				FROM ((addtocart a INNER JOIN package P ON p.id = a.p_id) INNER JOIN users u ON u.user_id = a.u_id)
				WHERE a.u_id = '$userid' ";
		$result = $conn->query($sql);
		$i = 1;
		$sum = 0;
		if($result->num_rows >0){
			while ($raw = $result->fetch_assoc()) {
				$cardid = $raw['id'];
				$itemName = $raw['name'];
				$iPrice = $raw['price'];
				$iQuantity = $raw['quantity']; ?>
				<tr>
					<td><?php echo $i ;?></td>
					<td><?php echo $itemName ;?></td>
					<td><?php echo $iPrice ;?></td>
					<td><?php echo $iQuantity ;?></td>
					<td><?php echo $iPrice*$iQuantity ;?></td>
					<td><a href="delete.php?id=<?php echo $cardid;  ?>"><img src="images/delete.png" style="width: 20px; height: 20px;"></a></td>
				</tr> <?php
				$i++;
				$sum +=$iPrice*$iQuantity;
			}
		}
		$conn->close(); ?>
		<tr>
			<td colspan="4"><center>Total Amount</center></td>
			<td><?php echo $sum; ?></td>
		</tr>
                   
 <?php
                
                

    }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Check Out</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<div class="w3-container" align="center" style="margin: 100px auto;">
	  <h2>Check Out</h2>

	  <table class="w3-table-all">
	    <tr>
	      <th>#</th>
	      <th>Product Name</th>
	      <th>Quantity</th>
	      <th>Price</th>
	      <th>Total Amount</th>
	      <th>Delete</th>
	    </tr>
	    <?php viewOrder();?>
	  </table>
	</div>
    <div style="text-align: center">
    <button >Confirm Order</button>
    </div>
</body>
</html>