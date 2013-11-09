<?php

require_once('db_connect.php');

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Final Level Games Home – Miki Nagai</title>
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
                        <input type="text" id="search-bar" name="filter_name" value="Search" onclick="this.value = '';" onkeydown="this.style.color = '#4b4b4b';">
                    </div>
                </div><!--row-->
            </div>
        </div><!--header-top-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="threecol">
                        <img src="img/logo_2.png" alt="logo" />
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
                        <li><a href="catalog.php">Xbox One</a></li>
                        <li><a href="catalog.php">PS4</a></li>
                        <li><a href="catalog.php">Xbox360</a></li>
                        <li><a href="catalog.php">PC</a></li>
                        <li><a href="catalog.php">Wii U</a></li>
                        <li><a href="catalog.php">3DS</a></li>
                        <li><a href="catalog.php">PS vista</a></li>
                        <li><a href="catalog.php">More</a></li>
                   </ul>
                </div>
            </div>
        </div>
    </div><!--navigation-->
    
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="twelvecol last">
                    
                   
                </div><!--threecol-->
            </div>
        </div>
    </div><!--content-->
    
    
    <!--
    <div id="banner">
        <div class="container">
            <div class="row">
                <div class="sixcol"><img src="img/banner1.png" alt="banner" /></div>
                <div class="sixcol last"><img src="img/banner2.png" alt="banner" /></div>
            </div>
        </div>
    </div>
    -->
    
    <div id="products">
        <div class="container" style="position:relative;">
            <div class="row">
                <div class="container">
                    <div class="twelvecol">
						<h1>Returns to FinaLevel.com</h1>
						<p><b>Please note:</b> A receipt is required for all returns and exchanges.</p>
						<p>This page details how to return products purchased online at finalevel.com.</p>
						<h2>Pre-owned Guarantee</h2>
						<p>This pre-owned product has been carefully tested, and is guaranteed to work. If you are not completely satisfied, simply return the product within 7 days for your money back or identical exchange within 30 days of purchase. </p>
						<h2>New product returns</h2>
						<p>Returned product(s) must be in the original packaging and include any manuals, cabling and accessories in sellable condition. We reserve the right to limit returns to unopened or defective products. Defective product(s) will be replaced with a like item, upon return. Terms and conditions of manufacturer's warranty apply to defective video games systems and computer hardware after 30 days. </p>
						<p>We do not accept returns of: </p>
						<ul>
						   <li>Any product(s) returned more than 30 days from the date on the packing slip.</li>
						   <li>Any product(s) that has been opened (taken out of its plastic wrap).</li>
						<li>Any product(s) not in its original condition. </li>
						<li>Any product(s) that is damaged, played, or is missing parts. </li>
						<li>Any product(s) that were sold as part of a bundle, unless the bundle is returned complete. </li>
						</ul>

						<p>Please do not mail us product(s) that do not meet the return criteria listed above, as we do not issue refunds for non-qualifying items and cannot return the items to you. </p>
						<h2>How to Return Products Purchased Online</h2>
						<h3>Return to FinaLevelgames.com</h3>
						<p>To return or exchange an item to FinaLevelgames.com, include the packing list, identify the reason for the return, and send it to the address on the return shipping label. </p>
						<h3>Guidelines</h3>
						<p>Refunds are issued in the original payment type. Cash purchases over $150 and all check purchases are subject to a refund by check issued from our corporate office within 14 business days. Customers with a gift receipt will only receive an exchange or a gift card of equal value. We reserve the right to refuse any return. </p>
						<p>Handling costs are non-refundable. If the reason for your return is due to our error, please contact us at 1-800-888-8888 for a handling credit. </p>
						<p>We reserve the right to refuse any return and to require that certain items be returned directly to the manufacturer. </p>


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
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="threecol footer-col">
                    <p class="footer-title">Customer Service</p>
                    <ul>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">site map</a></li>
                    </ul>
                </div>
                <div class="threecol footer-col">
                    <p class="footer-title">My Account</p>
                    <ul>
                        <li><a href="#">my account</a></li>
                        <li><a href="#">order history</a></li>
                        <li><a href="#">wish list</a></li>
                        <li><a href="#">news letter</a></li>
                        <li><a target="_blank" href="admin.php">Admin</a></li>
                    </ul>
                </div>
                <div class="threecol last contactinfor">
                    <div class="footer-right">
                    <p class="footer-title">Company information</p>
                    <ul>
                        <li><p><span class="contact"><img src="img/phone.png" alt="phone" /></span>+001 (000) 555 801</p></li>
                        <li><p><span class="contact"><img src="img/location-outline.png" alt="phone" /></span>123 Main  Street Orlando, FL</p></li>
                        <li style="text-transform:lowercase;"><p><span class="contact"><img src="img/mail.png" alt="phone" /></span>finalevelgames@contact.com</p></li>
                        <li style="padding-top:10px;"><a href="#" target="_blank"><img src="img/Facebook.png" alt="socialmedia" class="fb socialmedia" /></a>
                    <a href="#" target="_blank"><img src="img/Twitter.png" alt="socialmedia" class="tw socialmedia" /></a></li>
                    </ul>
                    </div>
                </div>
            </div><!--row-->
            <div class="row footer-bottom">
                <div class="tencol">
                    <p class="footer-content">This site is not official and is an assignment for a UCF Digital Media course <br />designed by Miki Nagai</p>
                </div>
                
                <div class="twocol last"><img src="img/payment.gif" alt="" /></div>
            </div>
        </div>
    
    </div><!--footer-->
    
</div><!--page_warp-->

</body>
</html>
