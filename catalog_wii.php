<?php

require_once('db_connect.php');

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Final Level Games Catalog Wii</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link rel="stylesheet" type="text/css" href="css/grid.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/nivo-slider.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/carousel.css">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41209891-2', 'ucf.edu');
  ga('send', 'pageview');

</script>
<div id="page_warp">
    <div id="header">
        <div id="header-top">
            <div class="container">
                 <div class="row">
                    <div id="search" class="twelvecol" style="text-align:right;">
                       <form action="search.php" method="post" class="search">
                        <input type="text" name="term" value="Search" onclick="this.value = '';" onkeydown="this.style.color = '#4b4b4b';">
                         <input id="search-bar" type="submit" name="search" value=""/>
                        </form>
                    </div>
                </div><!--row-->
            </div>
        </div><!--header-top-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="threecol">
                        <a href="home.php"><img src="img/logo_2.png" alt="logo" /></a>
                    </div><!--three col-->
                    <div class="ninecol last user-menu">
                        
                        <div id="cart">
                            <div class="heading">
                              <div class="background"></div>
                              <div class="mini_header_cart"><a href="cart.php" class="cart_empty">My cart (3 items)</a></div>
                            </div>
                        </div><!--cart-->
                        
                        <ul>
                            <li class="account">
                                <div class="background"></div>
                                <a href="client.php">account</a>
                            </li>
                            <li class="login">
                            	<div class="background"></div>
                                <a href="login.php">login</a>
                            </li>
                            <li class="signup">
                                <div class="background"></div>
                                <a href="#">sign up</a>
                            </li>
                            <li class="wishlist">
                                <div class="background"></div>
                                <a href="#">wishlist</a>
                            </li>
                        </ul>
                    </div><!--nine col-->
                </div>
            </div>
        </div><!--header-bottom-->
    </div><!--header-->
    
    <div id="navigation">
        <div class="container">
            <div class="row">
                <div id="mainmenu" class="twelvecol">
                    <ul>
                        <li><a href='catalog_playstation.php?pulltable=$pulltable'>PS3</a></li>
                        <li><a href='catalog_xbox.php?pulltable=$pulltable'>Xbox360</a></li>
                        <li><a href='catalog_pc.php?pulltable=$pulltable'>PC</a></li>
                        <li><a href='catalog_wii.php?pulltable=$pulltable'>Wii</a></li>
                        <li><a href='catalog_nintendods.php?pulltable=$pulltable'>Nintendo DS</a></li>
                        <li><a href="#">More</a></li>
                   </ul>
                </div>
            </div>
        </div>
    </div><!--navigation-->
    
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="twelvecol last">
					<div class="row">
					<div class="twocol ">
						<div>
							<div id='sidebar'>
							<div><h3>Categories</h3></div>
								<div>
									<ul>
										<li><a href="#">Action</a></li>
										<li><a href="#">Casual</a></li>
										<li><a href="#">Collectibles</a></li>
										<li><a href="#">DLC</a></li>
										<li><a href="#">Education</a></li>
										<li><a href="#">Fighting</a></li>
										<li><a href="#">Kinect</a></li>
										<li><a href="#">Movies & TV</a></li>
										<li><a href="#">Music & Party</a></li>
										<li><a href="#">Puzzle & Cards</a></li>
										<li><a href="#">Role-Playing</a></li>
										<li><a href="#">Shooter</a></li>
										<li><a href="#">Simulation</a></li>
										<li><a href="#">Sports</a></li>
										<li><a href="#">Strategy</a></li>
										<li><a href="#">Systems</a></li>				
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="ninecol last"> <!--products col-->
						<p class="result"> 
							<span class="page-result">Showing 8 of 20</span>
							<span class="nl-result"><a href="#">next</a> | <a href="#">last</a></span>
						</p>
						
							<?php
								$pulltable='"Wii"';
								include ('includes/listing.php'); ?>
						
					</div>
				</div><!--end row-->
                   
                </div><!--threecol-->
            </div>
        </div>
    </div><!--content-->

    
    <div id="products">
        <div class="container" style="position:relative;">
            <div class="row">
                <div class="container">
                    <div class="twelvecol">
					
					</div>
                </div>
            </div>
		</div>
	</div>
            
    
    <div id="footer">
    	<div class="container">
        	<div class="row">
            	<div class="threecol footer-col">
                	<p class="footer-title">information</p>
                    <ul>
                    	<li><a href="about.php">about us</a></li>
                        <li><a href="shipping.php">Delivery Information</a></li>
                        <li><a href="privacypolicy.php">Privacy Policy</a></li>
                        <li><a href="conditions.php">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="threecol footer-col">
                	<p class="footer-title">Customer Service</p>
                    <ul>
                    	<li><a href="#">Contact us</a></li>
                        <li><a href="returns.php">Returns</a></li>
                        <li><a href="#">Site map</a></li>
                    </ul>
                </div>
                <div class="threecol footer-col">
                	<p class="footer-title">My Account</p>
                    <ul>
                    	<li><a href="#">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Wish List</a></li>
                        <li><a href="#">News Letter</a></li>
                        <li><a target="_blank" href="admin.php">Admin</a></li>
                    </ul>
                </div>
                <div class="threecol last contactinfor">
                	<div class="footer-right">
                	<p class="footer-title">Company information</p>
                    <ul>
                    	<li><p><span class="contact"><image src="img/phone.png" alt="phone" /></span>+001 (000) 555 801</p></li>
                        <li><p><span class="contact"><image src="img/location-outline.png" alt="phone" /></span>123 Main  Street Orlando, FL</p></li>
                        <li style="text-transform:lowercase;"><p><span class="contact"><image src="img/mail.png" alt="phone" /></span>finalevelgames@contact.com</p></li>
                        <li style="padding-top:10px;"><a href="#" target="_blank"><image src="img/Facebook.png" alt="socialmedia" class="fb socialmedia" /></a>
                    <a href="#" target="_blank"><image src="img/Twitter.png" alt="socialmedia" class="tw socialmedia" /></a></li>
                    </ul>
                    </div>
                </div>
            </div><!--row-->
            <div class="row footer-bottom">
            	<div class="tencol">
                	<p class="footer-content">This site is not official and is an assignment for a UCF Digital Media course <br />designed by Rafael Mendoza, Melissa McDermott, Ashley Pajak, Miki Nagai, and James Marquis.
</p>
                </div>
                
                <div class="twocol last"><image src="img/payment.gif" alt="" /></div>
            </div>
        </div>
    
    </div><!--footer-->
    
</div><!--page_warp-->

</body>
</html>
