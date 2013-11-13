<?
	include("db_connect.php");
	include("includes/functions.php");
	
	if($_REQUEST['command']=='add' && $_REQUEST['identifyer']>0){
		$indentifyer=$_REQUEST['indentifyer'];
		addtocart($indentifyer,1);
		header("location:shoppingcart.php");
		exit();
	}
	include ('includes/head.php');
	include ('includes/header.php');
?>

<script language="javascript">
	function addtocart(indentifyer){
		document.form1.productid.value=indentifyer;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
<form name="form1">
	<input type="hidden" name="indentifyer" />
    <input type="hidden" name="command" />
</form>
<div align="center">
	<h1 align="center">Products</h1>
	<table border="0" cellpadding="2px" width="600px">
		<?
			$result=mysql_query("select * from Products");
			while($row=mysql_fetch_array($result)){
		?>
    	<tr>
        	<td><img src="<?=$row['product_image']?>" /></td>
            <td>   	<b><?=$row['product_name']?></b><br />
            		<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	$<?=$row['price']?></big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        <? } ?>
    </table>
</div>
<?php
	include ('includes/footer.php');
	
?>
