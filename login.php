<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Final Level Games Login – Miki Nagai</title>
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
                    	<a href="home.php"><img src="img/logo_2.png" alt="logo" /></a>
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
    
    <div class="login-content">
    	<div class="container">
        	<div class="row">
            	<div class="threecol">&nbsp;</div>
                <div class="fourcol">
                	<p class="login-header">REGISTERED CUSTOMERS</p>
                    
                    <form id="client-general-inf">
                    	<p><label>Email Address or Username </label><input id="userName" type="text" /></p>
                        <p><label>Password </label><input id="password" type="password" /></p>
                        <a href="#" style="font-weight: lighter;display:block;;font-size: 12px;text-decoration: underline;">Forgot Password</a> <br />
                        <button type="button" title="signin" id="loginSubmit" class="button btn-proceed-checkout btn-checkout"><span><span>SIGN IN</span></span></button>
                    </form>
                </div>
                <div class="fivecol last">
                	<p class="client-header">CREATE AN ACCOUNT</p>
                    <p style="font-weight:lighter;">Register with Final Level Games to enjoy personalized services, including:
                    <ul style="font-weight:lighter;margin-top:20px;padding-left:20px;margin-bottom:20px;">
                    	<li>Online Order Status</li>
                        <li>Wish List</li>
                        <li>Exclusive Emails</li>
                        <li>Checkout Preferences</li>
                    </ul>
                    <button type="button" title="signin" class="button btn-proceed-checkout btn-checkout"><span><span>Create an Account</span></span></button>
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
