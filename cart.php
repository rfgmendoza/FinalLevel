<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Final Level Games Cart – Miki Nagai</title>
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
    
    
    <div id="cart-content">
    	<div class="container">
    		<div class="row">
        		<div class="twelvecol">
                	<fieldset style="margin-top:20px;">
                    	<table id="shopping-cart-table" class="data-table cart-table">
                            <thead>
                                <tr>
                                    <th rowspan="1" class="hidden-cell">&nbsp;</th>
                                    <th rowspan="1" class="nobr"><span>Product Name</span></th>
                                    <th rowspan="1" class="hidden-cell">&nbsp;</th>
                                    <th rowspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                                    <th rowspan="1" class="a-center">Qty</th>
                                    <th rowspan="1" class="a-center">Subtotal</th>
                                    <th rowspan="1" class="hidden-cell">&nbsp;</th>
                                </tr>
                            </thead>
                           
                            <tfoot>
                                <tr class="first last">
                                    <td colspan="7" class="a-right last">
                                       <button type="button" class="button btn-continue"><span><span>Continue Shopping</span></span></button>         
                                       <button type="submit" class="button btn-update"><span><span>Update Cart</span></span></button>
                                       <button type="submit" class="button btn-empty" id="empty_cart_button"><span><span>Clear Cart</span></span></button>
                                    </td>
                                </tr>
                            </tfoot>
                            
                            <tbody>
                            	<tr class="first odd">
    								<td class="hidden-cell" style="text-align:center;">
                                    	<a href="#" title="KINGDOM HEARTS HD 1.5 ReMIX" class="product-image"><img src="http://www.gamestop.com/common/images/lbox/271369b.jpg" width="90" height="140" alt="a" /></a>
                                    </td>
                                    <td>
        								<p class="product-name"><a href="#">KINGDOM HEARTS HD 1.5 ReMIX</a></p>
                                    </td>
                                    <td class="a-center hidden-cell">
                                    	<a href="#" title="Edit item parameters">Edit</a>
                                    </td>
                                    <td class="a-right">
                            			<span class="cart-price"><span class="price">$70.00</span></span>
                                    </td>
                                    <td class="a-center">
                                    	<input value="1" size="4" title="Qty" class="input-text qty" maxlength="12">
                                    </td>
                                    <td class="a-right">
                                    	<span class="cart-price"><span class="price">$70.00</span></span>
                                    </td>
                                    <td class="a-center last">
                                    <a href="#" title="Remove item" class="btn-remove btn-remove2">Remove item</a>
                                    </td>
                                </tr>
                                
                                <tr class="even">
    								<td class="hidden-cell" style="text-align:center;">
                                    	<a href="#" title="KINGDOM HEARTS HD 1.5 ReMIX" class="product-image"><img src="http://www.gamestop.com/common/images/lbox/271369b.jpg" width="90" height="140" alt="a" /></a>
                                    </td>
                                    <td>
        								<p class="product-name"><a href="#">KINGDOM HEARTS HD 1.5 ReMIX</a></p>
                                    </td>
                                    <td class="a-center hidden-cell">
                                    	<a href="#" title="Edit item parameters">Edit</a>
                                    </td>
                                    <td class="a-right">
                            			<span class="cart-price"><span class="price">$70.00</span></span>
                                    </td>
                                    <td class="a-center">
                                    	<input value="1" size="4" title="Qty" class="input-text qty" maxlength="12">
                                    </td>
                                    <td class="a-right">
                                    	<span class="cart-price"><span class="price">$70.00</span></span>
                                    </td>
                                    <td class="a-center last">
                                    <a href="#" title="Remove item" class="btn-remove btn-remove2">Remove item</a>
                                    </td>
                                </tr>
                                
                                
                                
                                <tr class="last odd">
    								<td class="hidden-cell" style="text-align:center;">
                                    	<a href="#" title="KINGDOM HEARTS HD 1.5 ReMIX" class="product-image"><img src="http://www.gamestop.com/common/images/lbox/271369b.jpg" width="90" height="140" alt="a" /></a>
                                    </td>
                                    <td>
        								<p class="product-name"><a href="#">KINGDOM HEARTS HD 1.5 ReMIX</a></p>
                                    </td>
                                    <td class="a-center hidden-cell">
                                    	<a href="#" title="Edit item parameters">Edit</a>
                                    </td>
                                    <td class="a-right">
                            			<span class="cart-price"><span class="price">$70.00</span></span>
                                    </td>
                                    <td class="a-center">
                                    	<input value="1" size="4" title="Qty" class="input-text qty" maxlength="12">
                                    </td>
                                    <td class="a-right">
                                    	<span class="cart-price"><span class="price">$70.00</span></span>
                                    </td>
                                    <td class="a-center last">
                                    <a href="#" title="Remove item" class="btn-remove btn-remove2">Remove item</a>
                                    </td>
                                </tr>
                                
                                
                                
                                
                             </tbody>
                
                        </table>
                    </fieldset>
                    
                </div>
        	</div> <!--row-->
            <div class="row">
            	<div class="eightcol">&nbsp;</div>
                <div class="fourcol last totals">
                	<div id="total-box">
                	<table id="shopping-cart-totals-table">
                        <tfoot>
                        	<tr>
                                <td style="" class="a-right" colspan="1">
                                    <strong>Grand Total</strong>
                                </td>
                                <td style="" class="a-right">
                                    <strong><span class="price">$800.00</span></strong>
                                </td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td style="" class="a-right" colspan="1">
                                    Subtotal    </td>
                                <td style="" class="a-right">
                                    <span class="price">$800.00</span>    </td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="checkout-types">
                        <li>    <button type="button" title="Checkout" class="button btn-proceed-checkout btn-checkout"><span><span>Checkout</span></span></button>
                        </li>
                    </ul>
                    </div>
                </div><!--four-->
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
