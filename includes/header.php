<?php

include_once('jcart/jcart.php');
 
	$itemQty = $_SESSION['itemQty'];
    $jcartToken = $_SESSION['jcartToken']; 

?> 

<body>
<div id="page_warp">
    <div id="header">
        <div id="header-top">
            <div class="container">
                <div class="row">
                    <div id="search" class="twelvecol" style="text-align:right;">
                       <form action="search.php" method="post" class="search">
                        <input type="text" name="term" value="Search" onclick="this.value = '';" onkeydown="this.style.color = '#4b4b4b';">
                         <input id="search-bar" type="submit" name="search" value="">
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
                            <div style="display:none;"><?php $jcart->display_cart();?></div>
                            <div class="heading">
                              <div class="background"></div>
                              <div class="mini_header_cart"><a href="checkout.php" class="cart_empty">My cart(<div class="cartQty"></div>)</a></div>
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
							<li class="signout">
                            	<div class="background"></div>
                                <a href="signout.php">Signout</a>
                            </li>
                            <li class="signup">
                                <div class="background"></div>
                                <a href="registration.php">sign up</a>
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
