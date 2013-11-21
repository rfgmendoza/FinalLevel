
<?php

	$mynewsqli = new mysqli("sulley.cah.ucf.edu", "as932055", "01knights!", "as932055");
	
	if ($mynewsqli->connect_errno)
		{
			printf("Connect failed:", $mynewsqli->connect_error);
			exit();
		}
	$_GET["pulltable"]=$pulltable;	
	
	$pull='SELECT * FROM Products WHERE gaming_console='.$pulltable ;
	
	
	$products = $mynewsqli->query($pull) 
		or die ($mynewsqli->error);
	$a=0;
	echo"<div class='row product-list-wrap clear' style='width:auto;'>";
	
	while($row = $products->fetch_assoc())
		{
			$sku=$row['sku'];
			$prod=$row['product_name'];
			$cate=$row['category'];
			$price=$row['price'];
			$salprice=$row['sales_price'];
			$img=$row['product_image'];
			$ranking=$row['ranking'];
			$id=$row['indentifyer'];
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
			$jcartToken = $_SESSION['jcartToken'];
			if ($a<3){

				

				echo "
				<form method='post' action='' class='jcart'>
					<fieldset>
						<input type='hidden' name='jcartToken' value='$jcartToken'/>
						<input type='hidden' name='my-item-id' value='$id' />
						<input type='hidden' name='my-item-img' value='$img' />
						<input type='hidden' name='my-item-name' value='$prod' />
						<input type='hidden' name='my-item-price' value='$price' /> 
						<input type='hidden' name='my-item-url' value='' />
						<input type='hidden' name='my-item-qty' value='1' size='3' />
						
					</fieldset>

				<div class='threecol' style='margin-right: 2.8% !important;'>
					<div class='product-wrapper'>
						<div class='image'><a href='#'><img src='$img' alt='$prod' class='shopimg'></a></div>
						
						<div class='product-infor'>
							<p class='product_name'>$prodname</p>
							<p class='product-pr'>New: $$price<br>Used: $$salprice</p>
							$rankimg
						</div>
							<br>
							<p>
								

								
								<input type='submit' name='my-add-button' value='add to cart' class='button cartbtn' />
							</p>	
							
					</div>
				</div></form>";
				$a++;
			}else{
					
					echo "
						<form method='post' action='' class='jcart'>
						<fieldset>  
						<input type='hidden' name='jcartToken' value='$jcartToken'/>
						<input type='hidden' name='my-item-id' value='$id' />
						<input type='hidden' name='my-item-img' value='$img' />
						<input type='hidden' name='my-item-name' value='$prod' />
						<input type='hidden' name='my-item-price' value='$price' /> 
						<input type='hidden' name='my-item-url' value='' />
						<input type='hidden' name='my-item-qty' value='1' size='3' />
						
						</fieldset>
						<div class='threecol last' style='margin-right: 2.8% !important;'>
							<div class='product-wrapper'>
								<div class='image'><a href='#'><img src='$img' alt='$prod' class='shopimg'></a></div>
								
								<div class='product-infor'>
									<p class='product_name'>$prodname</p>
									<p class='product-pr'>New: $$price<br>Used: $$salprice</p>
									$rankimg
								</div>
									<br>
									<p>
										

										
										<input type='submit' name='my-add-button' value='add to cart' class='button cartbtn' />
									</p>	
									
							</div>
						</div>
					</div>
					</form>
				<div class='row product-list-wrap clear' style='width:auto;'>
						";
				$a=0;
			}
		}
	 /* Passing variables page to page: http://stackoverflow.com/questions/10252418/how-to-pass-variables-from-one-php-page-to-another-without-form  */
	
	echo"</div><br>";
			
?>

