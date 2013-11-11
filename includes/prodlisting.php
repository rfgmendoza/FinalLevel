<?php 
	$mynewsqli = new mysqli("sulley.cah.ucf.edu", "as932055", "01knights!", "as932055");
	
	if ($mynewsqli->connect_errno)
		{
			printf("Connect failed:", $mynewsqli->connect_error);
			exit();
		}
	
	
	$_GET["sku"]=$sku;
	echo $sku;
	//$sku= '"1111137"'; 
	//$id='"'.$sku.'"'
	echo "hello";
	$pull='SELECT * FROM Products WHERE sku='.$sku ;
	
	$products = $mynewsqli->query($pull) 
		or die ($mynewsqli->error);
		
	echo"<div class='row clear' style='width:auto;'>";
	
	
	while($row = $products->fetch_assoc())
		{
			$prod=$row['product_name'];
			$cate=$row['category'];
			$price=$row['price'];
			$salprice=$row['sales_price'];
			$img=$row['product_image'];
			$rating=$row['rating'];
			$console=$row['gaming_console'];
			$creator=$row['creator'];
			$ranking=$row['ranking'];
			$rankingimg;
			
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
			
			echo 
				"
				<div class='row clear prodtitle'>
					<h1>$prod<span id='creator'>	BY $creator</span></h1>
				</div>
				<div class='row clear prodpage'>
					<div class='threecol'>
						<div class='product-wrapper'>
							<div class='image'>
								<img src='$img' alt='$prod' class='shopimg'>
							</div>
							<br>
							<div class='centerfy'>
								$rankimg
							</div>
						</div>
					</div>
					<div class='fourcol'>
						<div class='buy'>
							<h3> BUY <span>NEW</span></h3>
							<h2>$$price</h2>
						</div>
						<br>
						<a class='add-to-cart' href=addToCart.php?id={$id}&name={$name}><span><image src='image/shopping-cart-white.png' alt='Add to Cart' /></span>add to cart</a>
					</div>
					<div class='fourcol last'>
						<div class='buy'>
							<h3> BUY <span>PRE-OWNED</span></h3>
							<h2>$$salprice</h2>
						</div>
						<br>
						<a class='add-to-cart' href='includes/addtocart.php?sku={$sku}&price={$salprice}'><span><image src='image/shopping-cart-white.png' alt='Add to Cart' /></span>add to cart</a>
					</div>
				</div>
			";
			*/
		}
	echo"</div><br>";	
?>