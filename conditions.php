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
						<h1>Conditions of Use<h1>
						<p>Last Updated: September 6, 2013</p>
						<p>FinaLevel Games, Inc. and/or its affiliates ("FinaLevel") provide website features and other products and services when you visit or shop using GameStop's mobile applications, or finalevelgames.com. <h3>By using the Sites you agree to the following terms and conditions, as well as the FinaLevel Privacy Policy and all other disclaimers and terms and conditions that appear elsewhere on this Site.</h3></p>

						<h2>Disclaimer and Limitation of Liability</h2>

						<p>THESE SITES ARE PROVIDED BY FINALEVEL ON AN "AS IS" BASIS. FINALEVEL MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THE SITES, THE INFORMATION, CONTENT, MATERIALS OR PRODUCTS INCLUDED ON THE SITES. FINALEVEL DOES NOT WARRANT THAT THE SITES, INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) OR OTHER SERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE SITES, FINALEVEL 'S SERVERS OR ELECTRONIC COMMUNICATIONS SENT FROM FINALEVEL ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. TO THE FULL EXTENT PERMISSIBLE BY APPLICABLE LAW, FINALEVEL DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. GAMESTOP WILL NOT BE LIABLE FOR ANY DAMAGES OF ANY KIND ARISING FROM THE USE OF THE SITES, INCLUDING BUT NOT LIMITED TO DIRECT, INDIRECT, INCIDENTAL, PUNITIVE, OR CONSEQUENTIAL DAMAGES.</p>

						<p>ANY MATERIAL DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE SITES IS DONE AT YOUR OWN DISCRETION AND RISK, AND YOU ARE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM, BREACH OF SECURITY, OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OF ANY SUCH MATERIAL. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM OR THROUGH GAMESTOP WILL CREATE ANY WARRANTY NOT EXPRESSLY STATED HEREIN.</p>
						<p>CERTAIN STATE LAWS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES. IF THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS, EXCLUSIONS, OR LIMITATIONS MAY BE INAPPLICABLE TO YOU, AND YOU MAY HAVE ADDITIONAL RIGHTS.</p>
						<h2>Applicable Law</h2>
						<p>By using the Sites, you agree that the laws of your state, without regard to principles of conflict of laws, will govern these Conditions of Use and any dispute of any sort that might arise between you and GameStop.</p>
						<h2>Copyright and Trademark Notice</h2>

						<p>All screens appearing on the Sites including graphics, text, design, buttons, logos, images, and icons, as well as the selection, assembly, and arrangement, are the sole property of GameStop or its suppliers and/or licesnors, and are protected by U.S. and international copyright laws. The content on the Sites is only for the purpose of shopping on the Sites or placing an order and for no other purpose. Any other use, including modification, reproduction, uploading, posting, transmission, or distribution in any form or by any means without GameStop's prior written permission, is strictly prohibited. All software used on the Sites is the sole property of GameStop or those supplying the software.</p>

						<p>FINALEVELGAMES.COM are trademarks or registered trademarks of Finalevel Games, Inc. In addition, graphics, logos, page headers, button icons, scripts, and service names included in or made available through the Sites are trademarks or trade dress of FinaLevel in the U.S..</p>
						<p>All rights not expressly granted herein are reserved.</p>
						<h2>Digital Millennium Copyright Act</h2>

						<p>If you are a copyright owner or an agent thereof and believe that any content on this Site infringes upon your copyrights, you may submit a notification pursuant to the Digital Millennium Copyright Act ("DMCA") by providing our Copyright Agent with the following information in writing (see 17 U.S.C 512(c)(3) for further detail):</p>
						<li>A physical or electronic signature of a person authorized to act on behalf of the owner of an exclusive right that is allegedly infringed; </li>
						<li>Identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works at a single online site are covered by a single notification, a representative list of such works at that site;</li>
						<li>Identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled and information reasonably sufficient to permit the service provider to locate the material;</li>
						<li>Information reasonably sufficient to permit the service provider to contact you, such as an address, telephone number, and, if available, an electronic mail;</li>
						<li>A statement that you have a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law; and</li>
						<li>A statement that the information in the notification is accurate, and under penalty of perjury, that you are authorized to act on behalf of the owner of an exclusive right that is allegedly infringed. </li>
						</ul>

						FinaLevel's designated Copyright Agent to receive notifications of claimed infringement is : <br>
						FinaLevel Games, Inc.
						ATT: Some CEO<br>
						888 Imaginary Way<br>
						Wallawoo, TX 76051<br><br>
						someceo@finalevel.com<br>
						<h2>Your Account</h2>
						<p>If you register on the Sites, you are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. FinaLevel does sell products for children, but it sells them to adults who can purchase with a credit card or other permitted payment method. If you are under 18, you may use the Sites only with involvement of a parent or guardian. FinaLevel reserves the right to refuse service, terminate accounts, remove or edit content, or cancel orders in its sole discretion. FinaLevel reserves the right to change, suspend, or discontinue all or any aspects of the Sites at any time without prior notice.</p>
						<p>FinaLevel does not knowingly collect information from children, including those less than thirteen years of age. If you are a child, do not submit any information to FinaLevel. If a parent, guardian, or other concerned person becomes aware that we have collected information from a child, including one less than 13 years of age, please contact us promptly and we will take steps to delete and remove any such information.</p>
						<h2>Errors on the Sites</h2>

						<p>Prices and availability of products are subject to change without notice. In the event a product price is listed incorrectly due to typographical error or error in pricing information received from our vendors, FinaLevel shall have the right to refuse or cancel any orders placed for any product listed at the incorrect price, regardless of whether the order has been confirmed or your credit card has been charged. If your credit card has already been charged for the purchase and your order is canceled, FinaLevel will immediately refund the amount charged to your credit card. </p>

						<h2>Order Policy & Shipping</h2>

						<p>Pricing and promotions on FinaLevelGames.com may vary from that of affiliated sites.</p>

						<p>Your receipt of an electronic or other form of order confirmation does not signify our acceptance of your order, nor does it constitute confirmation of our offer to sell. FinaLevel reserves the right at any time after receipt of your order to accept or decline your order for any reason. FinaLevel reserves the right at any time after receipt of your order, without prior notice to you, to supply less than the quantity you ordered of any item. We may require additional verification or information before accepting any order. All orders placed on this Site are subject to product availability. All items purchased from FinaLevel are sent by a third-party carrier pursuant to a shipment contract. This means that the risk of loss and title for such items pass to you upon our delivery to the carrier. If you are not fully satisfied with your purchase, you may return it in accordance with FinaLevelGames.com's Return Policy.</p>

						<h2>Site Content and Information</h2>

						<p>The Sites contain information, advice, text, and other materials that are provided for your convenience and enjoyment. You should be aware that the information might contain errors, omissions, inaccuracies, or outdated information. FinaLevel makes no representations or warranties as to the completeness, accuracy, adequacy, currency, or reliability of any information and shall not be liable for any lack of the foregoing. Descriptions of, or references to, products within this Site does not imply endorsement of that product and are not warranted to be accurate, complete, current, or error-free. If a product offered by FinaLevel is not as described, your sole remedy is to return it according to FinaLevelGames.com's Return Policy. This website and/or certain activities provided via the website may be covered by U.S. Patent 6,091,956. </p>

						<h2>Site Policies, Modification, and Severability</h2>
						<p>FinaLevel reserves the right to make changes to the Sites and these Conditions of Website Use and the Privacy Policy at any time. Each time you use the Sites, you should visit and review the then current Conditions of Use and Privacy Policy that apply to your transactions and use of this Sites. If you are dissatisfied with the Sites, their content, or Conditions of Website Use or Privacy Policy, you agree that your sole and exclusive remedy is to discontinue using the Sites. If any of these Conditions of Use is deemed invalid, void, or for any reason unenforceable, that condition shall be deemed severable and shall not affect the validity and enforceability of any remaining condition. </p>
						Distributing User Content

						<p>FinaLevel may allow users to the Sites to post reviews and comments ("Content") on products featured on the Sites. By submitting such Content, you automatically agree and promise that all Content is accurate and original and that, without any particular time limit, and without the payment of any fees, GameStop and anyone GameStop permits may reproduce, display, distribute and create new works of authorship in any media, based on and including the Content. Additionally, you grant GameStop the right to use the name you submit in connection with such Content. </p>

						<p>No Endorsement of User Content. Users to the Sites are prohibited from posting through the Sites any harmful, vulgar, obscene, profane, sexually explicit, abusive, threatening, privacy invading, libelous, racially, ethnically, or otherwise objectionable or unlawful content of any kind, or that infringes or may infringe on the intellectual or other rights of another. You acknowledge that FinaLevel does not endorse or pre-screen content, but that FinaLevel and its designees will have the right (but not the obligation) in their sole discretion to refuse, edit, move, or remove any content that is available via the Sites. You may not use a false e-mail address, impersonate any person or entity, or otherwise mislead as to the origin of any Content posted by you. </p>




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
