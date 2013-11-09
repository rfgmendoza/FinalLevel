<?php
	include ('includes/head.php');
	include ('includes/header.php');
?>
<<<<<<< HEAD

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
                            <!-- <li class="account">
                                <div class="background"></div>
                                <a href="client.php">account</a>
                            </li> -->
                            <li class="login">
                            	<div class="background"></div>
                                <a href="login.php">login</a>
                            </li>
                            <li class="signup">
                                <div class="background"></div>
                                <a href="registration.php">sign up</a>
                            </li>
                            <!-- <li class="wishlist">
                                <div class="background"></div>
                                <a href="#">wishlist</a>
                            </li> -->
                        </ul>
                    </div><!--nine col-->
                </div>
            </div>
        </div><!--header-bottom-->
    </div><!--header-->
=======
>>>>>>> fb12f505c61753425b1f69de18d3be216c6790ce
    
    
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
	<br>
<?php
	include ('includes/footer.php');
?>
