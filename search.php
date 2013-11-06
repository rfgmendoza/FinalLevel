<?php
	include ('includes/head.php');
	include ('includes/header.php');
?>
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
															<a class='add-to-cart' href='includes/addtocart.php?sku=$sku&amp;prod=$prod'><span><image src='img/shopping-cart-white.png' alt='Add to Cart' /></span>add to cart</a>
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
																	<a class='add-to-cart' href='includes/addtocart.php?sku=$sku&amp;prod=$prod'><span><image src='img/shopping-cart-white.png' alt='Add to Cart' /></span>add to cart</a>
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
<?php
	include ('includes/footer.php');
?>