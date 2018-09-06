<?php

  if(isset($_POST['addToCartButton'])){
    session_start();
    if(isset($_SESSION['name'])){
      $userid = $_SESSION['userID'];
      $packageID = $_POST['packID'];
      $packageQuantity = $_POST['qntity'];
     // echo "p_id  = ".$packageID." u_id  = ".$userid."  quantity = ".$packageQuantity."<br>";
      include('config.php');
      $sql = "INSERT INTO addtocart ( p_id, u_id, quantity)
               VALUES ('$packageID','$userid', '$packageQuantity')";
      if($conn->query($sql) === TRUE){?>
        <script>
            alert("added to the cart!");
        </script>
      <?php
      }
      else{
        //echo "error";
      }

      $conn->close();

    }
    else{ ?>
      <script>
          alert("please login first");
      </script>
    <?php
    }

  }


  function packPrint(){
    include('config.php');
      $sql = "SELECT * FROM package WHERE category = 1 ";
      $result = $conn->query($sql);
      if($result->num_rows >0){
        while ($row = $result->fetch_assoc()) {
          $ids = $row['id'];
          $names = $row['name'];
          $prices = $row['price'];
          $detail = $row['details']; ?>

           <div class="container">
              <div class="packagebg">
                 <div class="row">
                    <div class="col-md-12">
                       <h2 class="toptxt"></h2>
                    </div>
                 </div>
              </div>
           </div>
           <div class="container">
              <div class="bg">
                 <div class="row">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                      <div class="col-md-6">                    
                         <h2 class="normaltxt" name="packName"><?php echo $names ?></h2>
                         <p class="para"><?php echo $detail ?></p>
                      </div>
                      <div class="col-md-4">
                         <!-- <h2 class="normaltxt"> Child </h2>
                         <h3 class="para">below 18 </h3> -->
                         <h5 name ="price" class="normaltxt"><br> <br><?php echo $prices." BDT"; ?></h5>
                         
                      </div>
                      
                           <label>Quantity</label>
                           <input type="number" name="qntity" required="">
                           <input type="hidden" name="packID" value="<?php echo $ids; ?>">
                       
                      <div class="col-md-2 midd">
                         <button class="btn" name="addToCartButton">Add to Cart</button>
                      </div>
                    </form>
                 </div>
                 
              </div>
           </div>
          <?php
        }
      }

      $conn->close();
  }
?>

<!DOCTYPE html>
<html>
<head>
   <title>Package</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <!-- font awesome -->
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>

   <!--<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">-->

   <link rel="stylesheet" type="text/css" href="style_ticket.css">
</head>

<body class="bdpackage">

   <div class="container">
      <div class="bx1">
         <div class="row">
            <div class="col-md-12">
               <h1 class="midtxt"><br>Our Packages<br> <br></h1>
               <!-- <h3 class="para"><br>Don't spend time waiting in line. Buy and print tickets online and head straight to the gate! Your entry ticket gives you entry to the Safari Park, Safari Kingdom, Core Safari and regularly scheduled shows. Enhance your experience and add a Safari to complete your adventure!<br> <br></h3> -->
            </div>
         </div>
      </div>
   </div>
<!-- ################## Package 1 ################ -->
  <?php packPrint(); ?>
   
<!-- ################################### -->
   
<!-- ############################################# -->
   <div class="container">
      <div class="packagebg">
         <div class="row">
            <div class="col-md-12">
               <h1 class="toptxt"></h1>
            </div>
         </div>
      </div>
   </div>
<div class="container">
   <div class="bg">
      <div class="row">
      <h3 class="normaltxt" style="text-align: center;">Check out the new offers of our Safari Park</h3>
         <div class="col-md-4 col-md-offset-5">
            
             <button class="btn"  style="background-color: yellow;"><a href="offer.php"><h2>Our Offers</h2></a></button>
         </div>
      </div>

   </div>
</div>
<!-- ############################################# -->
   <div class="container">
      <div class="packagebg">
         <div class="row">
            <div class="col-md-12">
               <h1 class="toptxt"></h1>
            </div>
         </div>
      </div>
   </div>
<div class="container">
   <div class="bg">
      <div class="row">
      <h3 class="normaltxt" style="text-align: center;">You can customize the packages or can make your own package</h3>
         <div class="col-md-4 col-md-offset-5">
            
             <button class="btn" style="background-color: yellow;"><a href="personal_order.php"><h2>Personal Order</h2></a></button>
         </div>
      </div>

   </div>
</div>




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

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

