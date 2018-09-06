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


    $cardID = $_GET['id'];

    include('config.php');
    $sql = "DELETE FROM addtocart WHERE id= '$cardID'";
    if($conn->query($sql)){
    	//echo "successfull";
    	header("location:checkout.php");
    }
    else{
    	echo $conn->error;
    }

    $conn->close();
?>