<?php
	session_start();
	if(isset($_SESSION['msg'])){
		$name = $_SESSION['msg'];
                
	}
	else{
		header("Location:index.php");
	}
        
function packageView(){
    include 'config.php';
    $sql = "SELECT * FROM package";
    
    $result = $conn->query($sql);
		$i = 1;
		if($result->num_rows > 0){
			while ($raw = $result->fetch_assoc()) {
				$packID = $raw['id'];
				$pName = $raw['name']; 
				$pPrice = $raw['price'];
				$pDetails = $raw['details']; ?>
				<tr>
					<td><?php echo $i ;?></td>
					<td><?php echo $pName ;?></td>
					<td><?php echo $pPrice ;?></td>
					<td><?php echo $pDetails ;?></td>
					<td><a href="editPackage.php?id= <?php echo $packID; ?>"><img style="height: 20px;width: 20px;" src="images/edit.png"></a></td>
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
		<th>Package Name</th>
		<th>Package Price</th>
		<th>Details</th>
                <th>Edit</th>
		<?php packageView(); ?>


	</table>
</div>

</body>
</html>