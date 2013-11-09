<?php

require_once('db_connect.php');

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Final Level Games Home – Gaming For Girls</title>
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
                        <a href="home.php"><img src="image/logo_2.png" alt="logo" /></a>
                    </div><!--three col-->
                    <div class="nicecol last user-menu">
                        
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
                <div class="ninecol">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="image/slider1.png" alt="slider-1" />
                            <img src="image/slider2.png" alt="" />
                            <img src="image/slider3.png" alt="" />
                        </div>
                    </div>
                </div><!--eightcol-->
                <div class="threecol last">
                    <div id="loginform">
                        <p class="title">login</p>
                        <p>
                            <label for="nd_username">Username:</label>
                            <input type="text" class="text" name="log" id="userName" placeholder="Username">
                        </p>
                        <p>
                            <label for="nd_password">Password:</label> 
                            <input type="password" class="text" name="pwd" id="password" placeholder="Password">
                        </p>
                        <p style="margin-top:20px;">
                            <a class="forgotten" href="#nd_lost_password_form">You can not login?</a> 
                            <input type="submit" id="loginSubmit" class="button" value="Login">
                        </p>
                    </div>
                </div><!--threecol-->
            </div>
        </div>
    </div><!--content-->
    
    
    <!--
    <div id="banner">
        <div class="container">
            <div class="row">
                <div class="sixcol"><image src="image/banner1.png" alt="banner" /></div>
                <div class="sixcol last"><image src="image/banner2.png" alt="banner" /></div>
            </div>
        </div>
    </div>
    -->
    
    <div id="products">
        <div class="container" style="position:relative;">
            <div class="row">
                <div class="container">
                    <div class="twelvecol"><p class="featured">Featured Games For Girls</p></div>
                </div>
            </div>
            <div class="row">
				<?php include ('includes/homedeal.php'); ?>
                        
                     
            
            </div><!--row-->
        </div>
    </div><!--products-->
    
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
                    	<li><p><span class="contact"><image src="image/phone.png" alt="phone" /></span>+001 (000) 555 801</p></li>
                        <li><p><span class="contact"><image src="image/location-outline.png" alt="phone" /></span>123 Main  Street Orlando, FL</p></li>
                        <li style="text-transform:lowercase;"><p><span class="contact"><image src="image/mail.png" alt="phone" /></span>finalevelgames@contact.com</p></li>
                        <li style="padding-top:10px;"><a href="#" target="_blank"><image src="image/Facebook.png" alt="socialmedia" class="fb socialmedia" /></a>
                    <a href="#" target="_blank"><image src="image/Twitter.png" alt="socialmedia" class="tw socialmedia" /></a></li>
                    </ul>
                    </div>
                </div>
            </div><!--row-->
            <div class="row footer-bottom">
            	<div class="tencol">
                	<p class="footer-content">This site is not official and is an assignment for a UCF Digital Media course <br />designed by Miki Nagai</p>
                </div>
                
                <div class="twocol last"><image src="image/payment.gif" alt="" /></div>
            </div>
        </div>
    
    </div><!--footer-->
    
</div><!--page_warp-->

</body>
</html>
