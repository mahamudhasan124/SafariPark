<?php
        session_start();
	if(isset($_SESSION['msg'])){
		$name = $_SESSION['msg'];
                
	}
	else{
		header("Location:index.php");
	}
        
	 $pacID = $_GET['id'];
	 include ('config.php');
	 $sql = "SELECT * FROM package WHERE id = '$pacID' ";
	 $result = $conn->query($sql);
	 if($result->num_rows>0){
	 	while ($row = $result->fetch_assoc()) {
	 		$pacName = $row['name'];
	 		$pacPrice = $row['price'];
	 		$pacDetails = $row['details'];
	 	}
	 }
	 $conn->close();


	 if (isset($_POST['update'])) {
	 	
	 	$newName = $_POST['packName']; 
	 	$newPrice = $_POST['packPrice'];
	 	$newDetails = $_POST['packDetails'];

	 	include ('config.php');
	 	$sql1 = "UPDATE package SET name = '$newName' , price = '$newPrice' , details= '$newDetails' WHERE id = '$pacID' ";
	 	if($conn->query($sql1)){
                    // echo 'Updatad';
                         header("location:package.php");
	 	}
	 	else{
	 		echo "error!";
	 	}
	 	$conn->close();
	 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT Package</title>
</head>
<body>
<div style="margin: 100px auto;">
<h1>Edit Package</h1>
<form method="post">
	Package Name: <input type="text" name="packName" value=" <?php echo $pacName;?>" /><br>
	Package Price: <input type="text" name="packPrice" value=" <?php echo $pacPrice;?>" /><br>
	Package Details: <textarea type="text" name="packDetails"> <?php echo $pacDetails;?></textarea><br>
	<input type="submit" name="update" value="update"></input>
</form>
	
</div>
</body>
</html>