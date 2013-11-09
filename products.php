<?
	include("db_connect.php");
	include("includes/functions.php");
	
	if($_REQUEST['command']=='add' && $_REQUEST['identifyer']>0){
		$indentifyer=$_REQUEST['indentifyer'];
		addtocart($indentifyer,1);
		header("location:shoppingcart.php");
		exit();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products</title>
<script language="javascript">
	function addtocart(indentifyer){
		document.form1.productid.value=indentifyer;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
</head>


<body>
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
</body>
</html>
