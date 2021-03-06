<?php

//require_once('db_connect.php');

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
					<div class="tencol last"> <!--search area-->
						<?
									if(isset($_POST['term'])){

									$link = mysqli_connect ("sulley.cah.ucf.edu", "as932055", "01knights!", "as932055")  or die (mysqli_error());
									//mysqli_select_db ("as932055");

									//require 'db_connect.php';

									$term = $_POST['term'];
									//$term = strtoupper($term);
									$term = strip_tags($term);
									$term = trim($term);
                                    //$term_c = ;									 

									$sql = "SELECT * FROM Products WHERE product_name LIKE '%$term%' OR 'category' LIKE '%$term'";
									$result = mysqli_query($link, $sql);
									$numrows = mysqli_num_rows($result);

									echo "<p><b>You Searched For: </b>" . $term  ."<br/></p> ";

                                    echo "<div class='row product-list-wrap' style='width:auto;'>";
									
                                    while ($row = mysqli_fetch_array($result)){
										$sku=$row['sku'];
										$prod=$row['product_name'];
										$cate=$row['category'];
										$price=$row['price'];
										$salprice=$row['sales_price'];
										$img=$row['product_image'];
										$ranking=$row['ranking'];
										$rankingimg;
										
										if (strlen($prod)>20){
											$name = explode(':', $prod);
											$prodname = join('<br>',$name);
										}else if (strlen($prod)<22){
											$prodname= $prod.'<br>    <br>';
										}else{
											
										}
										if ($ranking==0){
											$rankimg='<p class="rating">&#9734;	&#9734;	&#9734;	&#9734;	&#9734; </p>';
											
										}else if($ranking==1){
											$rankimg='<p class="rating">&#9733;	&#9734;	&#9734;	&#9734;	&#9734;</p>';
											
										}else if ($ranking==2){
											$rankimg='<p class="rating">&#9733;	&#9733;	&#9734;	&#9734;	&#9734;</p>';
											
										}else if ($ranking==3){
											$rankimg='<p class="rating">&#9733;	&#9733;	&#9733;	&#9734;	&#9734;</p>';
											
										}else if ($ranking==4){
											$rankimg='<p class="rating">&#9733;	&#9733;	&#9733;	&#9733; &#9734;</p>';
											
										}else if ($ranking==5){
											$rankimg='<p class="rating">&#9733;	&#9733;	&#9733;	&#9733;	&#9733;</p>';
											
										}else{
											print("Error with Ranking");
										}
										if ($a<3){
											echo "
											<div class='threecol' style='margin-right: 2.8% !important;'>
												<div class='product-wrapper'>
													<div class='image'><a href='productpage.php?sku=$sku&amp;prod=$prod'><img src='$img' alt='$prod' class='shopimg'></a></div>
													
													<div class='product-infor'>
														<p class='product_name'>$prodname</p>
														<p class='product-pr'>New: $$price<br>Used: $$salprice</p>
														$rankimg
													</div>
														<br>
														<p>
															<a class='add-to-cart' href='includes/addtocart.php?sku=$sku&amp;prod=$prod'><span><image src='image/shopping-cart-white.png' alt='Add to Cart' /></span>add to cart</a>
														</p>	
														
												</div>
											</div>";
											$a++;
										}else{
												echo "
											
													<div class='threecol last' style='margin-right: 2.8% !important;'>
														<div class='product-wrapper'>
															<div class='image'><a href='productpage.php?sku=$sku&amp;prod=$prod'><img src='$img' alt='$prod' class='shopimg'></a></div>
															
															<div class='product-infor'>
																<p class='product_name'>$prodname</p>
																<p class='product-pr'>New: $$price<br>Used: $$salprice</p>
																$rankimg
															</div>
																<br>
																<p>
																	<a class='add-to-cart' href='includes/addtocart.php?sku=$sku&amp;prod=$prod'><span><image src='image/shopping-cart-white.png' alt='Add to Cart' /></span>add to cart</a>
																</p>	
																
														</div>
													</div>
												</div>
											<div class='row product-list-wrap clear' style='width:auto;'>
													";
											$a=0;
										}
									}

									//echo "<p><b>You Searched For: </b>" . $term  ."</p> ";
                                        echo "</div></div>";
									 if ($numrows == 0||$term=='') 
									 { 
									 echo "<p>Sorry, but your search returned 0 results</p>"; 
									 } 
   									 mysqli_free_result($result);
									 }
									 else{ 
									echo  "<p>Please enter a search term</p>"; 
									}
									?>
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




