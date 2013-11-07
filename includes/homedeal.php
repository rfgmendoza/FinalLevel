<?php
	$mynewsqli = new mysqli("sulley.cah.ucf.edu", "as932055", "01knights!", "as932055");
	
	if ($mynewsqli->connect_errno)
		{
			printf("Connect failed:", $mynewsqli->connect_error);
			exit();
		}
	
	
	$pull='SELECT * FROM Products WHERE feat="homedeal"' ;
	
	
	$products = $mynewsqli->query($pull) 
		or die ($mynewsqli->error);
	
	
	echo'<div class="list_carousel">               
            <ul id="box-products-wrapper">';
	
	while($row = $products->fetch_assoc())
		{
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
			}else if (strlen($prod)<20){
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
			echo "
				<li>
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
							
				</li>";
				
		}
	 /* Passing variables page to page: http://stackoverflow.com/questions/10252418/how-to-pass-variables-from-one-php-page-to-another-without-form  */
	
	echo'</ul><!--box-products-wrapper-->
                    <div class="clearfix"></div>
                    <a id="prev2" class="slide_arrow_prev"></a>
                    <a id="next2" class="slide_arrow_next"></a>
            </div>';
			
?>
