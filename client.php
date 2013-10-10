<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Final Level Games Client – Miki Nagai</title>
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
    
    
    
    <div class="client-content">
    	<div class="container">
        	<div class="row">
            	<div class="threecol">
                	<ul class="client-menu">
                    	<li><span><img src="img/equals.png" alt="user" /></span><a href="#">Overview</a></li>
                        <li><span><img src="img/user.png" alt="user" /></span><a href="#">My Account</a></li>
                        <li><span><img src="img/book.png" alt="user" /></span><a href="#">My Orders</a></li>
                        <li><span><img src="img/business-card.png" alt="user" /></span><a href="#">Payment Info</a></li>
                        <li><span><img src="img/edit.png" alt="user" /></span><a href="#">Wish List</a></li>
                    </ul>
                </div><!--threecol-->
                <div class="nicecol last">
                	<div class="general-infor-form">
                    	<p class="client-header">My Account</p>
                        <p style="font-weight: lighter;font-size: 14px;color: #333; padding-bottom: 15px;margin-top: -5px;">This is where you can update your billing, shipping and credit card information as well as other account preferences.
</p>
						<div class="line"></div>
                        <form id="client-general-inf">
                            <fieldset>
                                <p><label>Full Name</label>
                                    <span><input id="firstname" type="text" value="First Name" /><input id="lastname" type="text" value="Last Name" /></span></p>
                                <p><label>Business or C/O</label><input type="text" /></p>
                                <p><label>Street Address</label><input type="text" /></p>
                                <p><label>Unit</label><input type="text" value="Apt, Suite" /></p>
                                <p><label>State</label>
                               
                                <select name="state" id="state" required=""> <option value="">Select</option> <option value="AL">Alabama</option> <option value="AK">Alaska</option> <option value="AZ">Arizona</option> <option value="AR">Arkansas</option> <option value="CA">California</option> <option value="CO">Colorado</option> <option value="CT">Connecticut</option> <option value="DE">Delaware</option> <option value="DC">District of Columbia</option> <option value="FL">Florida</option> <option value="GA">Georgia</option> <option value="HI">Hawaii</option> <option value="ID">Idaho</option> <option value="IL">Illinois</option> <option value="IN">Indiana</option> <option value="IA">Iowa</option> <option value="KS">Kansas</option> <option value="KY">Kentucky</option> <option value="LA">Louisiana</option> <option value="ME">Maine</option> <option value="MD">Maryland</option> <option value="MA">Massachusetts</option> <option value="MI">Michigan</option> <option value="MN">Minnesota</option> <option value="MS">Mississippi</option> <option value="MO">Missouri</option> <option value="MT">Montana</option> <option value="NE">Nebraska</option> <option value="NV">Nevada</option> <option value="NH">New Hampshire</option> <option value="NJ">New Jersey</option> <option value="NM">New Mexico</option> <option value="NY">New York</option> <option value="NC">North Carolina</option> <option value="ND">North Dakota</option> <option value="OH">Ohio</option> <option value="OK">Oklahoma</option> <option value="OR">Oregon</option> <option value="PA">Pennsylvania</option> <option value="RI">Rhode Island</option> <option value="SC">South Carolina</option> <option value="SD">South Dakota</option> <option value="TN">Tennessee</option> <option value="TX">Texas</option> <option value="UT">Utah</option> <option value="VT">Vermont</option> <option value="VA">Virginia</option> <option value="WA">Washington</option> <option value="WV">West Virginia</option> <option value="WI">Wisconsin</option> <option value="WY">Wyoming</option> <option value="--">----- U.S Territory -----</option> <option value="AS">American Samoa</option> <option value="FM">Fed. Micronesia</option> <option value="GU">Guam</option> <option value="MH">Marshall Island</option> <option value="MP">N. Mariana Is.</option> <option value="PW">Palau Island</option> <option value="PR">Puerto Rico</option> <option value="VI">U.S. Virgin Islands</option> </select></p>
                                
                               <p><label>zipcode</label><input type="text" /></p>
                               <p><label>Phone</label><input type="text" /></p>
                               <p><label class="check-label" style="width:auto !important;"> <input type="checkbox" name="smsOptIn" id="sms-optin"> <em></em> <span>I'd like to receive mobile text alerts from Final Level Games.</span> </label></p>
                               <p style="margin-bottom: 36px"><label>Email Address</label><input type="text" /></p>
                               
                          </fieldset>      
                        </form>
                        
                        <button type="button" title="Checkout" class="button btn-proceed-checkout btn-checkout"><span><span>Submit</span></span></button>
                        
                    </div>
                </div><!--ninecol-->
            </div><!--row-->
        </div><!--container-->
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
