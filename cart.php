<?php
	include ('includes/head.php');
	include ('includes/header.php');
?>
    <div id="cart-content">
    	<div class="container">
    		<div class="row">
        		<div class="twelvecol">
                	<fieldset style="margin-top:20px;">
                    	<table id="shopping-cart-table" class="data-table cart-table">
                            <thead>
                                <tr>
                                    <th rowspan="1" class="hidden-cell">&nbsp;</th>
                                    <th rowspan="1" class="nobr"><span>Product Name</span></th>
                                    <th rowspan="1" class="hidden-cell">&nbsp;</th>
                                    <th rowspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                                    <th rowspan="1" class="a-center">Qty</th>
                                    <th rowspan="1" class="a-center">Subtotal</th>
                                    <th rowspan="1" class="hidden-cell">&nbsp;</th>
                                </tr>
                            </thead>
                           
                            <tfoot>
                                <tr class="first last">
                                    <td colspan="7" class="a-right last">
                                       <button type="button" class="button btn-continue"><span><span>Continue Shopping</span></span></button>         
                                       <button type="submit" class="button btn-update"><span><span>Update Cart</span></span></button>
                                       <button type="submit" class="button btn-empty" id="empty_cart_button"><span><span>Clear Cart</span></span></button>
                                    </td>
                                </tr>
                            </tfoot>
                            
                            <tbody>
                            	<tr class="first odd">
    								<td class="hidden-cell" style="text-align:center;">
                                    	<a href="#" title="KINGDOM HEARTS HD 1.5 ReMIX" class="product-image"><img src="http://www.gamestop.com/common/images/lbox/271369b.jpg" width="90" height="140" alt="a" /></a>
                                    </td>
                                    <td>
        								<p class="product-name"><a href="#">KINGDOM HEARTS HD 1.5 ReMIX</a></p>
                                    </td>
                                    <td class="a-center hidden-cell">
                                    	<a href="#" title="Edit item parameters">Edit</a>
                                    </td>
                                    <td class="a-right">
                            			<span class="cart-price"><span class="price">$70.00</span></span>
                                    </td>
                                    <td class="a-center">
                                    	<input value="1" size="4" title="Qty" class="input-text qty" maxlength="12">
                                    </td>
                                    <td class="a-right">
                                    	<span class="cart-price"><span class="price">$70.00</span></span>
                                    </td>
                                    <td class="a-center last">
                                    <a href="#" title="Remove item" class="btn-remove btn-remove2">Remove item</a>
                                    </td>
                                </tr>
                                
                                <tr class="even">
    								<td class="hidden-cell" style="text-align:center;">
                                    	<a href="#" title="KINGDOM HEARTS HD 1.5 ReMIX" class="product-image"><img src="http://www.gamestop.com/common/images/lbox/271369b.jpg" width="90" height="140" alt="a" /></a>
                                    </td>
                                    <td>
        								<p class="product-name"><a href="#">KINGDOM HEARTS HD 1.5 ReMIX</a></p>
                                    </td>
                                    <td class="a-center hidden-cell">
                                    	<a href="#" title="Edit item parameters">Edit</a>
                                    </td>
                                    <td class="a-right">
                            			<span class="cart-price"><span class="price">$70.00</span></span>
                                    </td>
                                    <td class="a-center">
                                    	<input value="1" size="4" title="Qty" class="input-text qty" maxlength="12">
                                    </td>
                                    <td class="a-right">
                                    	<span class="cart-price"><span class="price">$70.00</span></span>
                                    </td>
                                    <td class="a-center last">
                                    <a href="#" title="Remove item" class="btn-remove btn-remove2">Remove item</a>
                                    </td>
                                </tr>
                                
                                
                                
                                <tr class="last odd">
    								<td class="hidden-cell" style="text-align:center;">
                                    	<a href="#" title="KINGDOM HEARTS HD 1.5 ReMIX" class="product-image"><img src="http://www.gamestop.com/common/images/lbox/271369b.jpg" width="90" height="140" alt="a" /></a>
                                    </td>
                                    <td>
        								<p class="product-name"><a href="#">KINGDOM HEARTS HD 1.5 ReMIX</a></p>
                                    </td>
                                    <td class="a-center hidden-cell">
                                    	<a href="#" title="Edit item parameters">Edit</a>
                                    </td>
                                    <td class="a-right">
                            			<span class="cart-price"><span class="price">$70.00</span></span>
                                    </td>
                                    <td class="a-center">
                                    	<input value="1" size="4" title="Qty" class="input-text qty" maxlength="12">
                                    </td>
                                    <td class="a-right">
                                    	<span class="cart-price"><span class="price">$70.00</span></span>
                                    </td>
                                    <td class="a-center last">
                                    <a href="#" title="Remove item" class="btn-remove btn-remove2">Remove item</a>
                                    </td>
                                </tr>
                                
                                
                                
                                
                             </tbody>
                
                        </table>
                    </fieldset>
                    
                </div>
        	</div> <!--row-->
            <div class="row">
            	<div class="eightcol">&nbsp;</div>
                <div class="fourcol last totals">
                	<div id="total-box">
                	<table id="shopping-cart-totals-table">
                        <tfoot>
                        	<tr>
                                <td style="" class="a-right" colspan="1">
                                    <strong>Grand Total</strong>
                                </td>
                                <td style="" class="a-right">
                                    <strong><span class="price">$800.00</span></strong>
                                </td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td style="" class="a-right" colspan="1">
                                    Subtotal    </td>
                                <td style="" class="a-right">
                                    <span class="price">$800.00</span>    </td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="checkout-types">
                        <li>    <button type="button" title="Checkout" class="button btn-proceed-checkout btn-checkout"><span><span>Checkout</span></span></button>
                        </li>
                    </ul>
                    </div>
                </div><!--four-->
            </div>
    	</div>
    </div>
 
<?php
	include ('includes/footer.php');
?>