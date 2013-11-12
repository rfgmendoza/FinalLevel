<?php						
													
	if(isset($_SESSION['cart'])){
		$mynewsqli = new mysqli("sulley.cah.ucf.edu", "as932055", "01knights!", "as932055");
	
		if ($mynewsqli->connect_errno)
		{
			printf("Connect failed:", $mynewsqli->connect_error);
			exit();
		}
	
		$ids = "";
		foreach($_SESSION['cart'] as $sku){
			$ids = $ids . $sku . ",";
		}
		
		// remove the last comma
		$ids = rtrim($ids, ',');						
		
		$query = "SELECT product_name, price, product_image FROM Products WHERE indentifyer IN ({$ids})";
	
		
		$cartList = $mynewsqli->query($query) 
			or die ($mynewsqli->error);
		
		if($cartItemCount>0){
			echo "<table id='shopping-cart-table' class='data-table cart-table'>";//start table
			
				// our table heading
				echo "<thead><tr>										
						<th rowspan='1' class='a-center'>Product Image</th>
						<th rowspan='1' class='nobr'><span>Product Name</span></th>
						<th rowspan='1' class='a-center'><span class='nobr'>Unit Price</span></th>
						<th rowspan='1' class='hidden-cell'>&nbsp;&nbsp;&nbsp;&nbsp;</th>
					</tr></thead>";
				
				//also compute for total price
				$totalPrice = 0;
				
				while ($row = $cartList->fetch_assoc()){
					//extract($row);
					
					$sku=$row['sku'];
					$prod=$row['product_name'];
					$price=$row['price'];
					$img=$row['product_image'];
					
					
					$totalPriceBeforeTax += $price;
					$tax = round(($totalPriceBeforeTax * .06), 2);
					$totalPrice=($totalPriceBeforeTax + $tax);
					
					//creating new table row per record
					echo "<tbody><tr>";											
						echo "<td class='textAlignCenter'><img src='$img' alt='$prod' class='cartimg'></td>";
						echo "<td>{$prod}</td>";
						echo "<td class='textAlignCenter'>{$price}</td>";
						echo "<td class='textAlignCenter'><a href='#'>Remove </a></td>";
					echo "</tr>";
				}
				
				echo "
						<tr class='first last'>
							<td colspan='4' class='a-right last'>
							   <a class='cartbtn floatAlignLeft' href='home.php'>Continue Shopping</a>        
							   <a class='cartbtn floatAlignRight' href='includes/removeAll.php?id=$sku'>Clear Cart</a>
							</td>
						</tr>
					</tbody>";
			echo "</table>";
			
			echo "
				<div class='row'>
					<div class='eightcol'>&nbsp;</div>
					<div class='fourcol last totals'>
						<div id='total-box'>
						<table id='shopping-cart-totals-table'>
							
							<tbody>
								<tr>
									<td style='' class='a-right' colspan='1'>
										Subtotal    </td>
									<td style='' class='a-right'>
										<span class='price'>$  {$totalPriceBeforeTax}</span>    </td>
								</tr>
								<tr>
									<td style='' class='a-right' colspan='1'>
										Sales Tax 6%   </td>
									<td style='' class='a-right'>
										<span class='price'>$  {$tax}</span>    </td>
								</tr>
							
								<tr>
									<td style='' class='a-right' colspan='1'>
										<strong>Grand Total</strong>
									</td>
									<td style='' class='a-right'>
										<strong><span class='price'>$  {$totalPrice}</span></strong>
									</td>
								</tr>
							</tbody>
						</table>
						<ul class='checkout-types'>
							<li>    <a class='cartbtn' href='#'>Checkout</a>
							</li>
						</ul>
						</div>
					</div><!--four-->
				</div>";
			
		}else{
			echo "<br><div>No products found in your cart.</div>";
		}

	}else{
		echo "<br><div>No products in cart yet.</div>";
	}
?>
