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
    
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="ninecol">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="img/slider1.png" alt="slider-1" />
                            <img src="img/slider2.png" alt="" />
                            <img src="img/slider3.png" alt="" />
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
                    <div class="twelvecol"><p class="featured">Featured Games For Girls</p></div>
                </div>
            </div>
            <div class="row">
                <div class="list_carousel">
                    
                    <ul id="box-products-wrapper">
                    
                        <li>
                            <div class="image">
                                <?php
                                $sql="SELECT image FROM $tbl_name WHERE id='2'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo '<img src="' . $row[0] . '" alt="Games girls want" />';
                                }
                                ?>
                            </div>
                            <div class="product-infor">
                                <p class="product_name">
                                <?php
                                $sql="SELECT product_name FROM $tbl_name WHERE id='2'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?>
                                </p>
                                <p class="product_price">
                                <?php
                                $sql="SELECT price FROM $tbl_name WHERE id='2'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?></p>
                                <p class="rating"><img src="img/rating-icon.png" alt="rating" />
                                </p><!--rating-->
                            </div><!--product-infor-->
                            <p>
                                <a class="add-to-cart" href="#"><span><img src="img/shopping-cart-white.png" alt="" /></span>add to cart</a>
                            </p>
                            
                        </li><!--li-->
                        
                       <li>
                            <div class="image">
                                <?php
                                $sql="SELECT image FROM $tbl_name WHERE id='3'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo '<img src="' . $row[0] . '" alt="Games girls want" />';
                                }
                                ?>
                            </div>
                            <div class="product-infor">
                                <p class="product_name">
                                <?php
                                $sql="SELECT product_name FROM $tbl_name WHERE id='3'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?>
                                </p>
                                <p class="product_price">
                                <?php
                                $sql="SELECT price FROM $tbl_name WHERE id='3'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?></p>
                                <p class="rating"><img src="img/rating-icon.png" alt="rating" />
                                </p><!--rating-->
                            </div><!--product-infor-->
                            <p>
                                <a class="add-to-cart" href="#"><span><img src="img/shopping-cart-white.png" alt="" /></span>add to cart</a>
                            </p>
                            
                        </li><!--li-->
                        
                        <li>
                            <div class="image">
                                <?php
                                $sql="SELECT image FROM $tbl_name WHERE id='4'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo '<img src="' . $row[0] . '" alt="Games girls want" />';
                                }
                                ?>
                            </div>
                            <div class="product-infor">
                                <p class="product_name">
                                <?php
                                $sql="SELECT product_name FROM $tbl_name WHERE id='4'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?>
                                </p>
                                <p class="product_price">
                                <?php
                                $sql="SELECT price FROM $tbl_name WHERE id='4'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?></p>
                                <p class="rating"><img src="img/rating-icon.png" alt="rating" />
                                </p><!--rating-->
                            </div><!--product-infor-->
                            <p>
                                <a class="add-to-cart" href="#"><span><img src="img/shopping-cart-white.png" alt="" /></span>add to cart</a>
                            </p>
                            
                        </li><!--li-->
                        
                       <li>
                            <div class="image">
                                <?php
                                $sql="SELECT image FROM $tbl_name WHERE id='5'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo '<img src="' . $row[0] . '" alt="Games girls want" />';
                                }
                                ?>
                            </div>
                            <div class="product-infor">
                                <p class="product_name">
                                <?php
                                $sql="SELECT product_name FROM $tbl_name WHERE id='5'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?>
                                </p>
                                <p class="product_price">
                                <?php
                                $sql="SELECT price FROM $tbl_name WHERE id='5'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?></p>
                                <p class="rating"><img src="img/rating-icon.png" alt="rating" />
                                </p><!--rating-->
                            </div><!--product-infor-->
                            <p>
                                <a class="add-to-cart" href="#"><span><img src="img/shopping-cart-white.png" alt="" /></span>add to cart</a>
                            </p>
                            
                        </li><!--li-->
                        
                        <li>
                            <div class="image">
                                <?php
                                $sql="SELECT image FROM $tbl_name WHERE id='6'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo '<img src="' . $row[0] . '" alt="Games girls want" />';
                                }
                                ?>
                            </div>
                            <div class="product-infor">
                                <p class="product_name">
                                <?php
                                $sql="SELECT product_name FROM $tbl_name WHERE id='6'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?>
                                </p>
                                <p class="product_price">
                                <?php
                                $sql="SELECT price FROM $tbl_name WHERE id='6'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?></p>
                                <p class="rating"><img src="img/rating-icon.png" alt="rating" />
                                </p><!--rating-->
                            </div><!--product-infor-->
                            <p>
                                <a class="add-to-cart" href="#"><span><img src="img/shopping-cart-white.png" alt="" /></span>add to cart</a>
                            </p>
                            
                        </li><!--li-->
                        
                       <li>
                            <div class="image">
                                <?php
                                $sql="SELECT image FROM $tbl_name WHERE id='7'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo '<img src="' . $row[0] . '" alt="Games girls want" />';
                                }
                                ?>
                            </div>
                            <div class="product-infor">
                                <p class="product_name">
                                <?php
                                $sql="SELECT product_name FROM $tbl_name WHERE id='7'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?>
                                </p>
                                <p class="product_price">
                                <?php
                                $sql="SELECT price FROM $tbl_name WHERE id='7'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?></p>
                                <p class="rating"><img src="img/rating-icon.png" alt="rating" />
                                </p><!--rating-->
                            </div><!--product-infor-->
                            <p>
                                <a class="add-to-cart" href="#"><span><img src="img/shopping-cart-white.png" alt="" /></span>add to cart</a>
                            </p>
                            
                        </li><!--li-->
                        
                        <li>
                            <div class="image">
                                <?php
                                $sql="SELECT image FROM $tbl_name WHERE id='8'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo '<img src="' . $row[0] . '" alt="Games girls want" />';
                                }
                                ?>
                            </div>
                            <div class="product-infor">
                                <p class="product_name">
                                <?php
                                $sql="SELECT product_name FROM $tbl_name WHERE id='8'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?>
                                </p>
                                <p class="product_price">
                                <?php
                                $sql="SELECT price FROM $tbl_name WHERE id='8'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?></p>
                                <p class="rating"><img src="img/rating-icon.png" alt="rating" />
                                </p><!--rating-->
                            </div><!--product-infor-->
                            <p>
                                <a class="add-to-cart" href="#"><span><img src="img/shopping-cart-white.png" alt="" /></span>add to cart</a>
                            </p>
                            
                        </li><!--li-->

                    <li>
                            <div class="image">
                                <?php
                                $sql="SELECT image FROM $tbl_name WHERE id='9'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo '<img src="' . $row[0] . '" alt="Games girls want" />';
                                }
                                ?>
                            </div>
                            <div class="product-infor">
                                <p class="product_name">
                                <?php
                                $sql="SELECT product_name FROM $tbl_name WHERE id='9'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?>
                                </p>
                                <p class="product_price">
                                <?php
                                $sql="SELECT price FROM $tbl_name WHERE id='9'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?></p>
                                <p class="rating"><img src="img/rating-icon.png" alt="rating" />
                                </p><!--rating-->
                            </div><!--product-infor-->
                            <p>
                                <a class="add-to-cart" href="#"><span><img src="img/shopping-cart-white.png" alt="" /></span>add to cart</a>
                            </p>
                            
                        </li><!--li-->

                    <li>
                            <div class="image">
                                <?php
                                $sql="SELECT image FROM $tbl_name WHERE id='10'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo '<img src="' . $row[0] . '" alt="Games girls want" />';
                                }
                                ?>
                            </div>
                            <div class="product-infor">
                                <p class="product_name">
                                <?php
                                $sql="SELECT product_name FROM $tbl_name WHERE id='10'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?>
                                </p>
                                <p class="product_price">
                                <?php
                                $sql="SELECT price FROM $tbl_name WHERE id='10'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?></p>
                                <p class="rating"><img src="img/rating-icon.png" alt="rating" />
                                </p><!--rating-->
                            </div><!--product-infor-->
                            <p>
                                <a class="add-to-cart" href="#"><span><img src="img/shopping-cart-white.png" alt="" /></span>add to cart</a>
                            </p>
                            
                        </li><!--li-->

                    <li>
                            <div class="image">
                                <?php
                                $sql="SELECT image FROM $tbl_name WHERE id='11'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo '<img src="' . $row[0] . '" alt="Games girls want" />';
                                }
                                ?>
                            </div>
                            <div class="product-infor">
                                <p class="product_name">
                                <?php
                                $sql="SELECT product_name FROM $tbl_name WHERE id='11'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?>
                                </p>
                                <p class="product_price">
                                <?php
                                $sql="SELECT price FROM $tbl_name WHERE id='11'";
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_array($result))
                                {
                                echo $row[0];
                                }
                                ?></p>
                                <p class="rating"><img src="img/rating-icon.png" alt="rating" />
                                </p><!--rating-->
                            </div><!--product-infor-->
                            <p>
                                <a class="add-to-cart" href="#"><span><img src="img/shopping-cart-white.png" alt="" /></span>add to cart</a>
                            </p>
                            
                        </li><!--li-->
                        
                    </ul><!--box-products-wrapper-->
                    <div class="clearfix"></div>
                    <a id="prev2" class="slide_arrow_prev"></a>
                    <a id="next2" class="slide_arrow_next"></a>
            </div><!--list-carousel-->
            
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
