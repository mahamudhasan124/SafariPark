
<?php

  if(isset($_POST['buy-btn'])){
    session_start();
    if(isset($_SESSION['name'])){
      $userid = $_SESSION['userID'];
      $ids = array();
      $quantities = array();

      include('config.php');
      $sqlSearch = "SELECT id FROM package WHERE category !=1";
      $resultSearch = $conn->query($sqlSearch);
      if($resultSearch->num_rows>0){
        while ($rawResult = $resultSearch->fetch_assoc()) {
            $tempID = $rawResult['id'];
            if(isset($_POST[$tempID]) && trim($_POST[$tempID])!= ''){
                $ids[]=$tempID;
                $quantities[]=$_POST[$tempID];
            }

        }
      }else{
        echo "0 result";
      }
      $arraylength = count($ids);
      $added = false;
      for($i=0;$i<$arraylength;$i++){
        $packageID = $ids[$i];
        $packageQuantity = $quantities[$i];

        $sql = "INSERT INTO addtocart ( p_id, u_id, quantity)
               VALUES ('$packageID','$userid', '$packageQuantity')";
        if($conn->query($sql) === TRUE){
          $added = true;
        }
        else{
          echo "error";
        }
      }

      if($added){
        ?>
          <script>
              alert("added to the cart!");
          </script>
        <?php
      }

      
     // echo "p_id  = ".$packageID." u_id  = ".$userid."  quantity = ".$packageQuantity."<br>";

      $conn->close();

    }
    else{ ?>
      <script>
          alert("please login first");
      </script>
    <?php
    }

  }




  function printSafariParkTicket($cid){

    include('config.php');
    $sql = "SELECT * FROM ticket WHERE cata_gory = '$cid' ";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
      while ($row = $result->fetch_assoc()) {
        $sbDetails = $row['subdetails'];
        $ctname = $row['catagory_name'];?>
          <div class="bg">
            <div class="row">
              <div class="col-md-6">
                <h2 class="normaltxt"><?php echo $ctname; ?></h2>
                <p class="para"><?php echo $sbDetails; ?><br></p>
              </div>

              <?php
                  $sql2 = "SELECT * FROM package WHERE category='$cid'";
                  $result2 = $conn->query($sql2);
                  if($result2->num_rows >0){
                    while ($row2 = $result2->fetch_assoc()) { 
                        $iName = $row2['name'];
                        $iid = $row2['id']; 
                        $iprice = $row2['price'];
                        $idetails = $row2['details']; ?>

                        <div class="col-md-2">
                          <h2 class="normaltxt" name="child_name"><?php echo $iName; ?></h2>
                          <h3 class="para" name="child_descriptioin"><?php echo $idetails; ?></h3>
                                                <h5 class="normaltxt" name="child_price">BDT <?php echo $iprice; ?></h5>
                                                <input type="number" name="<?php echo $iid; ?>">
                                                
                        </div> <?php

                    }
                  }
              if($cid !=4){?>
                  </div>
                </div>
               </div> <?php
             }
      }
    }
    else {
      $msg = "Error ".$conn->error;
    }

    $conn->close();


  }

?>





<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- font awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>

	<!--<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">-->

	<link rel="stylesheet" type="text/css" href="style_ticket.css">
</head>
<body class="bd">
   <div>
   <div class="container">
   	<div class="bx1">
   		<div class="row">
   			<div class="col-md-12">
   				<h1 class="midtxt">Park Entry Ticket</h1>
   				<h3 class="para"><br>Don't spend time waiting in line. Buy and print tickets online and head straight to the gate! Your entry ticket gives you entry to the Safari Park, Safari Kingdom, Core Safari and regularly scheduled shows. Enhance your experience and add a Safari to complete your adventure!<br> <br></h3>
   			</div>
   		</div>
   	</div>
   </div>


   <div class="container">
   	<div class="entryticket">
   		<div class="row">
   			<div class="col-md-12">
   				<h1 class="toptxt">Safari Park</h1>
   			</div>
   		</div>
   	</div>
   </div>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
   <div class="container">

    <?php printSafariParkTicket(2); ?>
<!-- ################################### -->

   <div class="container">
   	<div class="entryticket">
   		<div class="row">
   			<div class="col-md-12">
   				<h1 class="toptxt">Core Safari Park</h1>
   			</div>
   		</div>
   	</div>
   </div>


   <div class="container">
   <?php printSafariParkTicket(3); ?>

<!-- ################################### -->

   <div class="container">
   	<div class="entryticket">
   		<div class="row">
   			<div class="col-md-12">
   				<h1 class="toptxt">Safari Kingdom</h1>
   			</div>
   		</div>
   	</div>
   </div>
   <div class="container">
     <?php printSafariParkTicket(4); ?>
   			<div class="col-md-2 midd">
   				<input type="submit" class="btn" name="buy-btn" value="Buy Now"/>
   			</div> 
   		</div>
    </form>
   	</div>
   </div>
   </div>



   <!-- ################################### -->








	<!-- script -->
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

  <!-- bootstrap cdn -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="app.js"></script>
  <!-- wow js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</body>
</html>



