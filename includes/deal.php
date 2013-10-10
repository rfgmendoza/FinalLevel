<?php
	$mynewsqli = new mysqli("sulley.cah.ucf.edu", "as932055", "01knights!", "as932055");
			
	if ($mynewsqli->connect_errno)
		{
			printf("Connect failed:", $mynewsqli->connect_error);
			exit();
		}
	$pull="SELECT * FROM Products ORDER BY RAND() LIMIT 3  ";			  
	
	$products = $mynewsqli->query($pull) 
		or die ($mynewsqli->error);
	$a=0;
	
	echo"<div class='row'><div class='twelvecol last'><div class='dealrow'><div class='row clear'>";
	
	if($a>=3){
	
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
				<div class='threecol last'>
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
				<div class='threecol'>
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
