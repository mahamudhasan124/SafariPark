<?php
  if(isset($_POST['addtocart-btn'])){
    session_start();
    if(isset($_SESSION['name'])){
      $userid = $_SESSION['userID'];
      $namesForCategory = array();
      $namesForField = array();      

      if (isset($_POST['adultTicketQuantity']) && trim($_POST['adultTicketQuantity']) != '') {
        $namesForCategory[] = "Adult";
        $namesForField[] ="adultTicketQuantity"; 
      }
      if (isset($_POST['studentTicketQuantity']) && trim($_POST['studentTicketQuantity']) != '') {
        $namesForCategory[] = "Student";
      }
      if (isset($_POST['childrenTicketQuantity']) && trim($_POST['childrenTicketQuantity']) != '') {
        $namesForCategory[] = "Child";
        $namesForField[] = "childrenTicketQuantity";
      }

      if (isset($_POST['pack1Quantity']) && trim($_POST['pack1Quantity']) != '') {
        $namesForCategory[] = "Package1";
        $namesForField[] = "pack1Quantity";
      }
      if (isset($_POST['pack2Quantity']) && trim($_POST['pack2Quantity']) != '') {
        $namesForCategory[] = "Package2";
        $namesForField[] = "pack2Quantity";
      }
      if (isset($_POST['megapackQuantity']) && trim($_POST['megapackQuantity']) != '') {
        $namesForCategory[] = "Mega Package";
        $namesForField[] = "megapackQuantity";
      }

      include ('config.php');
      $len = count($namesForField);
      $added = false;

      for($i=0;$i<$len;$i++) {
        $ticketName = $namesForCategory[$i];
        $fieldName = $namesForField[$i];
        $sql = "SELECT id FROM package WHERE name = '$ticketName' AND category <=2 ";
        $result = $conn->query($sql);
        if($result->num_rows >0){
          while ($raw = $result->fetch_assoc()) {
              $packageID = $raw['id'];
              $packageQuantity = $_POST[$fieldName];
              $sql2 = "INSERT INTO addtocart ( p_id, u_id, quantity)
               VALUES ('$packageID','$userid', '$packageQuantity')";
              if($conn->query($sql2) === TRUE){
                $added = true;
              }
              else{
                echo "error";
              }
          }
        }
      }

      if($added){
        ?>
          <script>
              alert("added to the cart!");
          </script>
        <?php
      }

    }
    else{ ?>
      <script>
          alert("please login first");
      </script>
    <?php
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Personal Order</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- font awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>

	<!--<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">-->

	<link rel="stylesheet" type="text/css" href="style_ticket.css">
  <style>
    #section{
      border-radius: 20px; 
      padding: 5px; 
      background: white; 
      width: 200px;
    }
  </style>

</head>

<body class="bdps">

   <div class="container">
   	<div class="bx1">
   		<div class="row">
   			<div class="col-md-4 col-md-offset-4">
   				<h1 class="midtxt">Personal Order<br></h1>
   			</div>
   		</div>
   	</div>
   </div>

   <div class="container">
   	<div class="psbg">
   		<div class="row">
   			<div class="col-md-12">
   				<h2 class="toptxt"></h2>
   			</div>
   		</div>
   	</div>
   </div>

   <br> <br> <br>
   <div class="container">
   	<div class="">
   		 <form method="POST">
         <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div id="section"><h1 class="toptxt">Ticket</h1></div><br>
                <label><h1><b>Adult<b></h1></label><br>
                                <label><h1><b>Student<b></h1></label><br>
                 <label><h1><b>Children<b></h1></label>
            </div>
            <div class="col-md-6">
                <div id="section"><h1 class="toptxt">QUANTITY</h1></div><br><br>
                <input type="number" name="adultTicketQuantity"><br><br><br>
                <input type="number" name="studentTicketQuantity"><br><br><br><br>
                <input type="number"name="childrenTicketQuantity"><br> 
             
            </div>
            
             
         </div>
            
             <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div id="section"><h1 class="toptxt">Package</h1></div><br>
                <label ><h1><b>Package1<b></h1></label><br>
                                <label><h1><b>Package2<b></h1></label><br>
                 <label><h1><b>Mega Package<b></h1></label>
            </div>
            <div class="col-md-6">
                <div id="section"><h1 class="toptxt">QUANTITY</h1></div><br><br>
                <input type="number" name="pack1Quantity"><br><br><br>
                
                <input type="number" name="pack2Quantity"><br><br><br><br>
                <input type="number" name="megapackQuantity"><br> 
             
            </div>
            
             
         </div>            
             <div class="row">
            <div class="col-md-2 col-md-offset-10 midd">
               <button name="addtocart-btn" class="btn">Add to Cart</button>
               

            </div>
         </div>
         </form>

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
