<?php
	session_start();
  if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
  }
  else{
    $name = "Sign In";
  }
?>








<!DOCTYPE html>

<html>
<head>
<title>Safari Park</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php"><img src="img/H/logo1.png" class="img-responsive" style="height: 50px;"></a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="tarrif.php">Tariff</a></li>
        <li><a class="drop" href="#">Facilities</a>
          <ul>
            <li><a href="ticket.php">Ticket</a></li>
            <li><a href="parking.php">Parking</a></li>
            <li><a href="Customer_helpline.php">Customer Helpline</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Reservation</a>
          <ul>
              <li><a href="ticket.php">Ticket Booking</a></li>
              <li><a href="package.php">Package</a></li>
              <li><a href="personal_order.php">Personal Order</a></li>

          </ul>
        </li>
        
        
        <li><a href="faq.php">FAQ</a></li>
          <?php 
            if($name!="Sign In"){ ?>
              <li><a class="drop" href="#"><?php echo $name ?></a>
                <ul>
                  <li><a href="checkout.php">Checkout</a></li>
                  <li><a href="settings.php">Settings</a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </li> <?php
            }
            else{ ?>
              <li><a href="login.php"> <?php echo $name ?></a></li><?php
            }
          ?>

      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div> <br> <br> <br>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper">
  <div id="slider" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li><img src="img/HMB/n1.jpg" class="img-responsive" alt="">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">ivamus commodo mi a lobortis ultrices</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Leo facilisis odio</a> <a class="btn red" href="#">Quis mollis nibh dolor</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n2.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Curabitur ullamcorper malesuada tempor</h2> -->
                  <!-- <p><a class="btn red" href="#">Suspendisse lobortis mauris</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n3.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Fusce in nisi auctor imperdiet quam quis</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Integer posuere arcu nec</a> <a class="btn red" href="#">Odio sollicitudin sagittis</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n4.jpg" class="img-responsive" alt="">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">ivamus commodo mi a lobortis ultrices</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Leo facilisis odio</a> <a class="btn red" href="#">Quis mollis nibh dolor</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n5.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Curabitur ullamcorper malesuada tempor</h2> -->
                  <!-- <p><a class="btn red" href="#">Suspendisse lobortis mauris</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n6.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Fusce in nisi auctor imperdiet quam quis</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Integer posuere arcu nec</a> <a class="btn red" href="#">Odio sollicitudin sagittis</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n7.jpg" class="img-responsive" alt="">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">ivamus commodo mi a lobortis ultrices</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Leo facilisis odio</a> <a class="btn red" href="#">Quis mollis nibh dolor</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n8.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Curabitur ullamcorper malesuada tempor</h2> -->
                  <!-- <p><a class="btn red" href="#">Suspendisse lobortis mauris</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n9.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Fusce in nisi auctor imperdiet quam quis</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Integer posuere arcu nec</a> <a class="btn red" href="#">Odio sollicitudin sagittis</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n10.jpg" class="img-responsive" alt="">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">ivamus commodo mi a lobortis ultrices</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Leo facilisis odio</a> <a class="btn red" href="#">Quis mollis nibh dolor</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n11.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Curabitur ullamcorper malesuada tempor</h2> -->
                  <!-- <p><a class="btn red" href="#">Suspendisse lobortis mauris</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n12.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Fusce in nisi auctor imperdiet quam quis</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Integer posuere arcu nec</a> <a class="btn red" href="#">Odio sollicitudin sagittis</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n13.jpg" class="img-responsive" alt="">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">ivamus commodo mi a lobortis ultrices</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Leo facilisis odio</a> <a class="btn red" href="#">Quis mollis nibh dolor</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n14.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Curabitur ullamcorper malesuada tempor</h2> -->
                  <!-- <p><a class="btn red" href="#">Suspendisse lobortis mauris</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n15.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Fusce in nisi auctor imperdiet quam quis</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Integer posuere arcu nec</a> <a class="btn red" href="#">Odio sollicitudin sagittis</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n16.jpg" class="img-responsive" alt="">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">ivamus commodo mi a lobortis ultrices</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Leo facilisis odio</a> <a class="btn red" href="#">Quis mollis nibh dolor</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n17.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Curabitur ullamcorper malesuada tempor</h2> -->
                  <!-- <p><a class="btn red" href="#">Suspendisse lobortis mauris</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n18.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Fusce in nisi auctor imperdiet quam quis</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Integer posuere arcu nec</a> <a class="btn red" href="#">Odio sollicitudin sagittis</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n19.jpg" class="img-responsive" alt="">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">ivamus commodo mi a lobortis ultrices</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Leo facilisis odio</a> <a class="btn red" href="#">Quis mollis nibh dolor</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n20.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Curabitur ullamcorper malesuada tempor</h2> -->
                  <!-- <p><a class="btn red" href="#">Suspendisse lobortis mauris</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
        <li><img src="img/HMB/n21.jpg" alt="" class="img-responsive">
          <div class="txtoverlay">
            <div class="centralise">
              <div class="verticalwrap">
                <article>
                  <!-- <h2 class="heading uppercase">Fusce in nisi auctor imperdiet quam quis</h2> -->
                  <!-- <p><a class="btn orange pushright" href="#">Integer posuere arcu nec</a> <a class="btn red" href="#">Odio sollicitudin sagittis</a></p> -->
                </article>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->



<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div id="services" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="group">

      <h2 class="heading">Welcome to Our Bangabandhu Safari Park</h2>
      <p class="btmspace-10">This is Bigest Safari Park in Bangladesh. It has many place to explore.
Information and education centers in the briefing / samyaka the authenticity of the image
 can take the Safari Park.Natural History Museum of wildlife and plant species diversity of
 the students and researchers can be identified.Protected bus ride will show to engage tigers, 
lions, elephants, bear, Maya deer, deer, monkey, Hanuman, bear, ladybug, crocodiles and
 exotic birds in natural environment. Guests will see the lake and the numerous aquatic birds.
Observation tower look up to the scenic beauty of the forest and wildlife. Pakhisala will see
 numerous birds of home and abroad. The hog deer bestanite rare species. Playing guest room
 will served for the night.</a></p>
       

       <!-- ################################################  -->

       <!-- 
      <div class="one_third first">
        <article class="service"><i class="icon red circle fa fa-bell-o"></i>
          <h2 class="heading">Phasellus accumsan velit lacus</h2>
          <p class="btmspace-10">Ut vitae mi turpis donec convallis turpis bibendum dolor hendrerit eget ultrices.</p>
          <p><a href="#">Read More &raquo;</a></p>
        </article>
      </div>
      <div class="one_third">
        <article class="service"><i class="icon orange circle fa fa-bicycle"></i>
          <h2 class="heading">Duis in dictum erat phasellus cursus</h2>
          <p class="btmspace-10">Ut augue ante euismod vitae scelerisque non tincidunt ut velit integer et iaculis.</p>
          <p><a href="#">Read More &raquo;</a></p>
        </article>
      </div>
      <div class="one_third">
        <article class="service"><i class="icon green circle fa fa-mortar-board"></i>
          <h2 class="heading">Vivamus accumsan mollis mi in ultricies</h2>
          <p class="btmspace-10">Nullam commodo orci ut justo bibendum tristique proin vel est at risus volutpat.</p>
          <p><a href="#">Read More &raquo;</a></p>
        </article>
      </div>
    </div> -->
    <!-- ################################################################################################ -->
    <!-- <div class="clear"></div> -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <section id="cta" class="clear"> 
    <!-- <div class="three_quarter first">
      <h2 class="heading">Fusce quis feugiat urna dui leo egestas augue</h2>
      <p>Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet pulvinar dapibus.</p>
    </div>
    <div class="one_quarter"><a class="btn" href="#">Get it now <span class="fa fa-arrow-right"></span></a></div> -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="latest"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group">
      <li>
        <figure><a class="overlay" href="#"><img src="img/H/sliderPic3.jpg" alt=""></a>
          <figcaption class="inspace-30 center">
            <p class="bold uppercase">Packages</p>
            <p><a href="package.php">View Here &raquo;</a></p>
          </figcaption>
        </figure>
      </li>
      <li>
        <figure><a class="overlay" href="#"><img src="img/HM/services.jpg" alt=""></a>
          <figcaption class="inspace-30 center">
            <p class="bold uppercase">Services</p>
            <p><a href="pages/service.html">View Here &raquo;</a></p>
          </figcaption>
        </figure>
      </li>
      <li>
        <figure><a class="overlay" href="#"><img src="img/1 (1).jpg" alt=""></a>
          <figcaption class="inspace-30 center">
            <p class="bold uppercase">Highlighting Spots</p>
            <p><a href="pages/highlighting_spot.html">View Here &raquo;</a></p>
          </figcaption>
        </figure>
      </li>
      <li>
        <figure><a class="overlay" href="#"><img src="img/HM/restdemopic.jpg" alt=""></a>
          <figcaption class="inspace-30 center">
            <p class="bold uppercase">Restaurants</p>
            <p><a href="pages/restaurant.html">View Here &raquo;</a></p>
          </figcaption>
        </figure>
      </li>
      <li>
        <figure><a class="overlay" href="#"><img src="img/HM/6.jpg" alt=""></a>
          <figcaption class="inspace-30 center">
            <p class="bold uppercase">Offers</p>
            <p><a href="offer.php">View Here &raquo;</a></p>
          </figcaption>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<div class="wrapper row6">
  <section id="cta" class="clear"> 
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container nospace clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_half first paditout">
        
        <ul class="nospace group">
          <li class="btmspace-30">
            <article class="service largeicon"><i class="icon nobg circle fa fa-cubes"></i>
              <h6 class="heading"><a href="#">Parts of Safari Park</a></h6>
              <p>Bangabanodhu Safari Park is divided into five parts - Core Safari, Safari Kingdom, Biodiversity Park, Extensive Asian Safari Park and Bangabandhu Square.
              Also, there are Orchid House, Vulture and Owl Corners, Egg World, Kangaroo, Elephant Show Gallery.
              There is also a western part of the Safari Kingdom.

              Tourists can visit Safari Park by paying a fixed fee.</p>
            </article>
          </li>
          <li class="btmspace-30">
            <article class="service largeicon"><i class="icon nobg circle fa fa-times-circle"></i>
              <h6 class="heading"><a href="#"> Rules &amp; Regulations </a></h6>
              <p> <ul>
                <li>Put the polythene and non-abrasive materials on the dustbins.</li>
                <li>Cigarette packets, discarded paper, wasted batteries, lighter and biscuits, cranberries, plastic containers where there is no place to leave them in a specific place.</li>
                <li>Do not let the soft and pure drinking bottles in the forest</li>
                <li>Mike playing, betting or scalding, singing and grouping is not enough.</li>
                <li>To use the rest house, you will have to take a bookings from beforehand.</li>
                <li>Avoid giving any type of food to wild animals.</li>
              </ul></p>
            </article>
          </li>
          <li>
              
              <h4><b>Map View</b></h4>
            </article>
          </li>
        </ul>
      </div>
      <div class="one_half"><img src="img/H/news1.jpg" alt="">
          
          <h6 class="heading"><a href="#">Opening Time</a></h6>
           <p>(Hours might differ) <br>
                  Saturday 9AM–5PM <br>
                  Sunday  9AM–5PM <br>
                  Monday  9AM–5PM <br>
                  Tuesday Closed <br>
                  Wednesday 9AM–5PM <br>
                  Thursday  9AM–5PM <br>
                  Friday  9AM–5PM</p>    
      </div> <br>
      
      
      <div id="map-container" class="map-container"><a id="map-container-link" href="https://www.google.com/maps/place/%E0%A6%AC%E0%A6%99%E0%A7%8D%E0%A6%97%E0%A6%AC%E0%A6%A8%E0%A7%8D%E0%A6%A7%E0%A7%81+%E0%A6%B6%E0%A7%87%E0%A6%96+%E0%A6%AE%E0%A7%81%E0%A6%9C%E0%A6%BF%E0%A6%AC+%E0%A6%B8%E0%A6%BE%E0%A6%AB%E0%A6%BE%E0%A6%B0%E0%A7%80+%E0%A6%AA%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%95/data=!3m1!4b1!4m2!3m1!1s0x37567640fa93d6a9:0xed8c33b38a2097a5" target="_blank" itemprop="hasMap" data-tracking-element-type="7">
                      <img src="https://maps.googleapis.com/maps/api/staticmap?scale=1&amp;size=520x410&amp;style=feature:poi.business|visibility:off&amp;style=feature:water|visibility:simplified&amp;style=feature:road|element:labels.icon|visiblity:off&amp;style=feature:road.highway|element:labels|saturation:-90|lightness:25&amp;format=jpg&amp;language=en&amp;region=BD&amp;markers=color:0x88b06a|24.1700431,90.3965902&amp;zoom=16&amp;client=google-presto&amp;signature=Bax6AoAgCbYERnTPZgoJU22N92w"
                           alt="Map showing business location." width="400" height="300"></a></div>
      
      
      <!-- <div class="one_half"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3638.691173323286!2d90.39906855825691!3d24.16974943548695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37567640fa93d6a9%3A0xed8c33b38a2097a5!2sBangabandhu+Sheikh+Mujib+Safari+Park!5e0!3m2!1sen!2sbd!4v1523642941187" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div> -->
<!--       <div class="one_half"><a href="#"><img src="img/backwood.jpg" alt=""></a></div>
      <div class="one_half"><a href="#"><img src="img/backwood.jpg" alt=""></a></div>
      <div class="one_half"><a href="#"><img src="img/backwood.jpg" alt=""></a></div>
      <div class="one_half"><a href="#"><img src="img/backwood.jpg" alt=""></a></div> -->
      
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Address: </h6>
      <address class="btmspace-15">
        Bangabandhu Safari Park.
        Safari Park, Gazipur<br>
        Dhaka, Bangladesh<br>
        <!-- Postcode/Zip -->
      </address>
      <ul class="nospace">
        <li class="btmspace-10"><span class="fa fa-phone"></span> 01675000111, 01555333</li>
        <li><span class="fa fa-envelope-o"></span> helpline@safaripark.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Quick Links</h6>
      <ul class="nospace linklist">
          <li><a href="index.php">Home Page</a></li>
          <li><a href="customer_helpline.php">Customer Manager</a></li>
        <li><a href="#">News Update</a></li>
        <li><a href="#">Bus Service</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Reviews</h6>
      <article>
        <h2 class="nospace"><a href="#">MD. Talukdar khondokar</a></h2>
        <time class="smallfont" datetime="2017-04-06">Friday, 6<sup>th</sup> April 2017</time>
        <p>Thanks for providing all details. It's helped us a lot. The safari park trip was awesome. We ...</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="title">Keep In Touch</h6>
      <form class="btmspace-30" method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a class="faicon-tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="index.html">Safari Park</a></p>
    <p class="fl_right">Designed &amp; Developed by <a target="_blank" href="#" title="Free Website Templates"> NMD Software Ltd.</a> <br>
    Visitor Number: 102584 </p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>