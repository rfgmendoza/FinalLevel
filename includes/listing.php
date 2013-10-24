<?php
	$mynewsqli = new mysqli("sulley.cah.ucf.edu", "as932055", "01knights!", "as932055");
			
	if ($mynewsqli->connect_errno)
		{
			printf("Connect failed:", $mynewsqli->connect_error);
			exit();
		}
	$pull="SELECT * FROM Products ORDER BY RAND() ";			  
	
	$products = $mynewsqli->query($pull) 
		or die ($mynewsqli->error);
	$a=0;
	print "alert('Starting')";
	echo"<div class='row product-list-wrap' style='width:auto;'>";
	
	if($a>2){
	
		while($row = $products->fetch_assoc())
			{
				$sku=$row['SKU'];
				$prod=$row['Product Name'];
				$cate=$row['Category'];
				$price=$row['Price'];
				$salprice=$row['Sales Price'];
				$img=$row['Product Image'];
				$ratin=$row['Rating'];
				$ranking=$row['Ranking'];
				$rankingimg;
				
				if (strlen($prod)>10){
					$name = explode(":", $prod);
					$prod = join("<br>",$name);
				}else{
					
				}
				if ($ranking==0){
					$rankimg='../image/icons/0stars.png';
				}else if($ranking==1){
					$rankimg='../image/icons/1stars.png';
				}else if ($ranking==2){
					$rankimg='../image/icons/2stars.png';
				}else if ($ranking==3){
					$rankimg='../image/icons/3stars.png';
				}else if ($ranking==4){
					$rankimg='../image/icons/4stars.png';
				}else if ($ranking==5){
					$rankimg='../image/icons/5stars.png';
				}else{
					alert("Error with Ranking");
				}		
				echo "
				<div class='threecol last'style='margin-right: 2.8% !important;'>
					<div class='product-wrapper'>
						<div class='image'><img src='$img' alt='$prod'></div>
						
						<div class='product-infor'>
							<p class='product_name'>$prod</p>
							<p class='product-pr'>New: $$price	Used: $$salprice</p>
							<p class='rating'><img src=$rankimg alt='Star Ranking $ranking'> </p>
						</div>
							<p>
								<a class='add-to-cart' href='#'><span><image src='image/shopping-cart-white.png' alt='Add to Cart' /></span>add to cart</a>
							</p>			
					</div>
				</div>	
			</div>
			<div class='row product-list-wrap' style='width:auto;'>";
			}
		$a=0;
	
	}else{
		while($row = $products->fetch_assoc())
			{
				$sku=$row['SKU'];
				$prod=$row['Product Name'];
				$cate=$row['Category'];
				$price=$row['Price'];
				$salprice=$row['Sales Price'];
				$img=$row['Product Image'];
				$ratin=$row['Rating'];
				$ranking=$row['Ranking'];
				$rankingimg;
				
				if (strlen($prod)>10){
					$name = explode(":", $prod);
					$prod = join("<br>",$name);
				}else{
					
				}
				if ($ranking==0){
					$rankimg='../image/icons/0stars.png';
				}if ($ranking==1){
					$rankimg='../image/icons/1stars.png';
				}if ($ranking==2){
					$rankimg='../image/icons/2stars.png';
				}if ($ranking==3){
					$rankimg='../image/icons/3stars.png';
				}if ($ranking==4){
					$rankimg='../image/icons/4stars.png';
				}if ($ranking==5){
					$rankimg='../image/icons/5stars.png';
				}else{
					alert("Error with Ranking");
				}
					
				echo "
				<div class='threecol' style='margin-right: 2.8% !important;'>
					<div class='product-wrapper'>
						<div class='image'><img src='$img' alt='$prod'></div>
						
						<div class='product-infor'>
							<p class='product_name'>$prod</p>
							<p class='product-pr'>New: $$price	Used: $$salprice</p>
							<p class='rating'><img src=$rankimg alt='Star Ranking $ranking'> </p>
						</div>
							<p>
								<a class='add-to-cart' href='#'><span><image src='image/shopping-cart-white.png' alt='Add to Cart' /></span>add to cart</a>
							</p>			
					</div>
				</div>";
			}
		$a++;
	}
	echo"</div>";
			
?>
