<?php
    $msg ="";
    if(isset($_POST['textbutton'])){
            include('config.php');

            $textName = $_POST['textname'];
            $textEmail = $_POST['textemail'];
            $textMessage = $_POST['textmessage'];

            $sql = " INSERT INTO messages (username, useremail, message)
                    VALUES ( '$textName', '$textEmail', '$textMessage')";

            if( $conn->query($sql) == true){
                    //echo "new record successfully inserted!";
                    $msg = "successfull";
            }
            else {
                    //$msg = "Error ".$conn->error;
            }

            $conn->close();

    }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Customer Manager</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="customer_wrapper">
		<div>
			<button class="btnm top" type="button">Customer Manager</button>
		</div>
		<div>
                    <form class="fr" method="POST">
						<div class="ad" ><label>Your Name</label><br></div>
						<div class="ad" ><input id="for" name="textname" type="text" placeholder="First name"><br></div>
						
						<div class="ad"><label>Email adress</label><br></div>
						<div class="ad" ><input id="for" type="email" name="textemail" placeholder="Email"><br></div>
						
                                                <div class="ad"><label>Type Messgae</label><br></div>
						<div class="ad" ><textarea name="textmessage" id="for"></textarea><br></div>
                                                
                                                <div class="ad" ><button name="textbutton" id="btn" type="submit">Send</button></div>
					</form>
		</div>
	</div>
      <?php 
            if($msg!=null){
                $msg = null;
                ?>

                <script type="text/javascript">
                    alert("Successfully sent!");
                </script>

                <?php                
            } 

        ?>
    
</body>


<?php



