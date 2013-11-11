<?php
	include ('includes/head.php');
?>
  <div class="client-content">
            <div class="container">
                <div class="row">
                    
                    <p style="padding-left: 6px;margin-bottom: 23px;">Welcome, Admin</p>
                
                    <div class="twocol">
                        <ul class="admin-menu">
                            <li><a href="#">Home</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Report</a></li>
                        <li><a href="#">Main Site</a></li>
                        <li><a href="#">Log Off</a></li>
                    </ul>
                </div><!--two-->
                <div class="tencol last">
                
                <TABLE class="data-table admin-table">

                <THEAD>
                <TR><TH>ID</TH> <TH>Product image</TH> <TH>Product Name</TH> <TH>Category</TH> <TH>SKU</TH> <TH>Qty</TH> <TH>Price</TH><TH>Rating</TH> <TH>Console</TH> <TH>Creator</TH><TH>&nbsp;</TH> </TR>
                </THEAD>
                
                <TBODY>
                <TR> <TD>1</TD><TD><img src="img/game1.jpg" width="100" height="112" /></TD> <TD>KINGDOM HEARTS HD 1.5 ReMIX</TD> <TD>Role-Playing</TD> <TD>499</TD> <TD>50</TD>  <TD>$40.00</TD> <TD>rating</TD> <TD>console</TD> <TD>creator</TD> <TD><a href="#">edit</a></TD>  </TR>
                
                <TR> <TD>2</TD> <TD><img src="img/game1.jpg" width="100" height="112" /></TD> <TD>KINGDOM HEARTS HD 1.5 ReMIX</TD> <TD>Role-Playing</TD> <TD>499</TD> <TD>50</TD>  <TD>$40.00</TD> <TD>rating</TD> <TD>console</TD> <TD>creator</TD> <TD><a href="#">edit</a></TD>  </TR>
                
                <TR> <TD colspan="10"><span class="addnew">Add new</span></TD>  </TR>
                
                
                <TR> 
                    <form action="reviseProductUpload.php" method="post">
                    					<TD class="lastcell">
                                                <input type="text" style="width:10px;" id="productId" name="productId"/>
                                        </TD> 
                                        <TD class="lastcell">
                                                <input type="text" style="width:100px;" id="productImage" name="productImage"/>
                                        </TD> 
                                        <TD class="lastcell">
                                                <input type="text" style="width:200px;" id="productName" name="productName"/>
                                        </TD> 
                                        <TD>
                                                <select name="productCategory" id="productCategory" required=""> 
                                                        <option value="">Select</option> 
                                                        <option value="Action Adventure">Action Adventure</option> 
                                                        <option value="Arcade/Puzzle">Arcade/Puzzle</option> 
                                                        <option value="Family/Party">Family/Party</option>   
                                                        <option value="Fighting">Fighting</option> 
                                                        <option value="Music/Dance">Music/Dance</option>  
                                                        <option value="Racing">Racing</option> 
                                                        <option value="Family/Party">Family/Party</option>  
                                                        <option value="Arcade/Puzzle">Arcade/Puzzle</option> 
                                                        <option value="Role-Playing">Role-Playing</option> 
                                                </select>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:30px;" id="productSku" name="productSku"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:30px;" id="productQty" name="productQty"/>
                                        </TD>  
                                        <TD>
                                                <input type="text" style="width:50px;" id="productPrice" name ="productPrice"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" id="productRating" name="productRating"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" id="productConsole" name="productConsole"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" id="productCreator" name="productCreator"/>
                                        </TD> 
                                        <TD><input type="submit" id="addProduct" value="Add"></TD>  
                        </form>
                                </TR>
                
                </TBODY>
                
                
                </TABLE>
                </div>
            </div>
        </div>
    </div>
    
<?php
	include ('includes/footer.php');
?>