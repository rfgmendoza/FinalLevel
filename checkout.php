<?
	include ('db_connect.php');

	include ('includes/head.php');
	include ('includes/header.php');
?>

	<html>
		<body>

			<div id="cart-content">
				<div class="container">
					<div class="row">
						<div class="twelvecol">
							<div class="cartheight">
							
								<div id="jcart"><?php $jcart->display_cart();?></div>
							`</div>
						</div>
					</div>
				</div>
			</div>

		</body>
	</html>
<?php 	include ('includes/footer.php');?>
