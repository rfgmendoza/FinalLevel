<?php
<<<<<<< HEAD
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
                        $rankingimg;
                        
                        if (strlen($prod)>20){
                                $name = explode(':', $prod);
                                $prodname = join('<br>',$name);
                        }else if (strlen($prod)<22){
                                $prodname= $prod.'<br>    <br>';
                        }else{
                                
                        }
                        if ($ranking==0){
                                $rankimg='<p class="rating">&#9734;        &#9734;        &#9734;        &#9734;        &#9734; </p>';
                                
                        }else if($ranking==1){
                                $rankimg='<p class="rating">&#9733;        &#9734;        &#9734;        &#9734;        &#9734;</p>';
                                
                        }else if ($ranking==2){
                                $rankimg='<p class="rating">&#9733;        &#9733;        &#9734;        &#9734;        &#9734;</p>';
                                
                        }else if ($ranking==3){
                                $rankimg='<p class="rating">&#9733;        &#9733;        &#9733;        &#9734;        &#9734;</p>';
                                
                        }else if ($ranking==4){
                                $rankimg='<p class="rating">&#9733;        &#9733;        &#9733;        &#9733; &#9734;</p>';
                                
                        }else if ($ranking==5){
                                $rankimg='<p class="rating">&#9733;        &#9733;        &#9733;        &#9733;        &#9733;</p>';
                                
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
         /* Passing variables page to page: http://stackoverflow.com/questions/10252418/how-to-pass-variables-from-one-php-page-to-another-without-form  */
        
        echo"</div><br>";
                        
?>
=======
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
	
	echo"<div class='row'><div class='twelvecol last'><div class='listrow'><div class='row clear'>";
	
	if($a>3){
	
		while($row = $products->fetch_assoc())
			{
				$prod=$row['Product Name'];
				$cate=$row['Category'];
				$price=$row['Price'];
				$salprice=$row['Sales Price'];
				$img=$row['Product Image'];
				$ratin=$row['Rating'];
				$ranking=$row['Ranking'];
					
				if (strlen($prod)>10){
					$name = explode(":", $prod);
					$prod = join("<br>",$name);
				}else{
					
				}
							
				echo "
				<div class='twocol last'>
					<div class='catalog'>
						<img src='$img' alt='$prod'>
						<br>
						<div class='list'>
							<h2>$prod</h2>
							<p>New: $$price<br>Used: $$salprice<br> <img src=$ranking alt='Star Ranking'> <br><a href='#' class='btn'>Buy</a></p>
							
						</div>			
					</div>
				</div>	
			</div>
		</div>
		<div class='listrow'>
			<div class='row clear'>
					";
			}
		$a=0;
	
	}else{
		while($row = $products->fetch_assoc())
			{
				$prod=$row['Product Name'];
				$cate=$row['Category'];
				$price=$row['Price'];
				$salprice=$row['Sales Price'];
				$img=$row['Product Image'];
				$ratin=$row['Rating'];
				$console=$row['Console'];
				$creator=$row['Creator'];
				$ranking=$row['Ranking'];
				
				
					
				if (strlen($prod)>10){
					$name = explode(":", $prod);
					$prod = join("<br>",$name);
				}else{
				}
				
				echo "
				<div class='twocol'>
					<div class='catalog'>
						<img src='$img' alt='$prod'>
						<br>
						<div class='list'>
							<h2>$prod</h2>
							<p>New: $$price<br>Used: $$salprice<br><img src=$ranking alt='Star Ranking'><br><a href='#' class='btn'>Buy</a></p>
							
						</div>				
					</div>
				</div>	
					";
			}
		$a++;
	}
	echo"</div></div></div></div>";
			
?>
>>>>>>> 38c81919be58d9e1314a55250f1ae700bb7edf16
