<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Final Level Games Admin – Miki Nagai</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link rel="stylesheet" type="text/css" href="css/grid.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/nivo-slider.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/carousel.css">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

</head>

<body>

<div id="page_warp">
<!--
        <div id="header">
            <div id="header-top">
            <div class="container">
                <div class="row">
                    <div id="search" class="twelvecol" style="text-align:right;">
                        <input type="text" id="search-bar" name="filter_name" value="Search" onclick="this.value = '';" onkeydown="this.style.color = '#4b4b4b';">
                    </div>
                </div>
           </div>
        </div>
        <div id="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="threecol">
                            <img src="img/logo_2.png" alt="logo" />
                    </div>
                    <div class="nicecol last user-menu">
                            
                        <div id="cart">
                                <div class="heading">
                              <div class="background"></div>
                              <div class="mini_header_cart"><a href="cart.php" class="cart_empty">My cart (3 items)</a></div>
                            </div>
                        </div>
                        
                            <ul>
                                <li class="account">
                                    <div class="background"></div>
                                <a href="client.php">account</a>
                            </li>
                            <li class="login">
                                    <div class="background"></div>
                                <a href="#">login</a>
                            </li>
                            <li class="signup">
                                    <div class="background"></div>
                                <a href="#">sign up</a>
                            </li>
                            <li class="wishlist">
                                    <div class="background"></div>
                                <a href="#">wishlist</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="navigation">
            <div class="container">
                <div class="row">
                    <div id="mainmenu" class="twelvecol">
                        <ul>
                            <li><a href="catalog.php">Xbox One</a></li>
                        <li><a href="catalog.php">PS4</a></li>
                        <li><a href="catalog.php">Xbox360</a></li>
                        <li><a href="catalog.php">PC</a></li>
                        <li><a href="catalog.php">Wii U</a></li>
                        <li><a href="catalog.php">3DS</a></li>
                        <li><a href="catalog.php">PS vista</a></li>
                        <li><a href="catalog.php">More</a></li>
                   </ul>
                </div>
            </div>
        </div>
    </div>
    
    -->
    
    <div class="client-content">
            <div class="container">
                <div class="row">
                    
                    <p style="padding-left: 6px;margin-bottom: 23px;">Welcome, Admin</p>
                
                    <div class="onecol">
                        <ul class="admin-menu">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="userLog.php">User Log</a></li>
                        <li><a href="admin.php">Add/Revise Products</a></li>
                        <li><a href="#">Orders</a></li>
                        <li><a href="home.php">Main Site</a></li>
                        <li><a href="home.php">Log Off</a></li>
                    </ul>
                </div><!--two-->
                <div class="elevencol last">
                
                <TABLE border="0" cellspacing="0" cellpadding="0" class="data-table admin-table admin-product-table ">

                <THEAD>
                <TR> <TH>ID</TH> <TH>Product image</TH> <TH>Product Name</TH> <TH>Category</TH> <TH>SKU</TH> <TH>Qty</TH> <TH>Price</TH><TH>Rating</TH> <TH>Console</TH> <TH>Creator</TH><TH>&nbsp;</TH> </TR>
                </THEAD>
                
                <TBODY>

                <?php
                $host="sulley.cah.ucf.edu"; // Host name 
                $username="as932055"; // Mysql username 
                $password="01knights!"; // Mysql password 
                $db_name="as932055"; // Database name 
                $tbl_name="Products"; // Table name

                mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
                mysql_select_db("$db_name")or die("cannot select DB");
                
                session_start();

                $userQuery = $_SESSION['username'];
                $passwordQuery = $_SESSION['password'];
    
                $sql1="SELECT username, password, access_level FROM Directory WHERE username='$userQuery'";
                $result1 = mysql_query($sql1);
                while($row1 = mysql_fetch_array($result1))
                {
                    if($userQuery==$row1[0] && $passwordQuery==$row1[1])
                        { 
                            if ($row1[2]==1){
                                echo "<script type='text/javascript'>alert('Restricted Access');</script>";
                                echo "<script type='text/javascript'>window.location=\"userLog.php\";</script>";
                            }
                            if ($row1[2]==2){
                                echo "<script type='text/javascript'>alert('Restricted Access');</script>";
                                echo "<script type='text/javascript'>window.location=\"userLog.php\";</script>";
                            }
                        }
                } 

                $sql="SELECT * FROM $tbl_name";
                $result = mysql_query($sql);
                while($row = mysql_fetch_array($result))
                {
                    if ($row[6]==" "){
                        $row[6]="img/noImage.jpg";
                    }
                    else{
                        $row[6]=$row[6];
                    }
                    echo '<form action="reviseProductUpload.php?id=' . $row[0] . '" method="post">';
                    echo '<TR> <TD class="id"> ' . $row[0] . '</TD><TD><img src="' . $row[6] . '" width="100" height="112" /></TD> <TD>' . $row[1] . '</TD> <TD>' . $row[2] . '</TD> <TD>' . $row[3] . '</TD> <TD>' . $row[11] . '</TD>  <TD>' . $row[4] . '</TD> <TD>' . $row[7] . '</TD> <TD>' . $row[8] . '</TD> <TD>' . $row[9] . '</TD> </TR>';
                    echo '<TR class="form"> 
                    
                                        <TD>
                                                &nbsp;
                                        </TD> 
										<TD>
                                                <input type="text" style="width:150px;" placeholder="image" id="productImage" name="productImage"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:200px;" placeholder="product name" id="productName" name="productName"/>
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
                                                <input type="text" style="width:30px;" placeholder="SKU" id="productSku" name="productSku"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:30px;" placeholder="Qty" id="productQty" name="productQty"/>
                                        </TD>  
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="Price" id="productPrice" name ="productPrice"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="Rating" id="productRating" name="productRating"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="Console" id="productConsole" name="productConsole"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="Creator" id="productCreator" name="productCreator"/>
                                        </TD> 
                                        <TD><input type="submit" id="addProduct" value="Edit"><a href="deleteProduct.php?id=' . $row[0] . '">Delete</a></TD>

                                </TR>
                            </form>';
                }
                ?>
                
                <form action="uploadProduct.php" method="post">
                <TR> <TD colspan="10"><span class="addnew">Add new</span></TD>  </TR>
                
                
                <TR class="form"> 
                    	<TD>
                                                &nbsp;
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:100px;" placeholder="image" id="productImage" name="productImage"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:200px;" placeholder="product name" id="productName" name="productName"/>
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
                                                <input type="text" style="width:30px;" placeholder="SKU" id="productSku" name="productSku"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:30px;" placeholder="qty" id="productQty" name="productQty"/>
                                        </TD>  
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="price" id="productPrice" name ="productPrice"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="rating" id="productRating" name="productRating"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="console" id="productConsole" name="productConsole"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="creator" id="productCreator" name="productCreator"/>
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
    
    
    <!--
    
    <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="threecol footer-col">
                        <p class="footer-title">information</p>
                    <ul>
                            <li><a href="about.php">about us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="threecol footer-col">
                        <p class="footer-title">Customer Service</p>
                    <ul>
                            <li><a href="#">Contact us</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">site map</a></li>
                    </ul>
                </div>
                <div class="threecol footer-col">
                        <p class="footer-title">My Account</p>
                    <ul>
                            <li><a href="#">my account</a></li>
                        <li><a href="#">order history</a></li>
                        <li><a href="#">wish list</a></li>
                        <li><a href="#">news letter</a></li>
                    </ul>
                </div>
                <div class="threecol last contactinfor">
                        <div class="footer-right">
                        <p class="footer-title">Company information</p>
                    <ul>
                            <li><p><span class="contact"><img src="img/phone.png" alt="phone" /></span>+001 (000) 555 801</p></li>
                        <li><p><span class="contact"><img src="img/location-outline.png" alt="phone" /></span>123 Main  Street Orlando, FL</p></li>
                        <li style="text-transform:lowercase;"><p><span class="contact"><img src="img/mail.png" alt="phone" /></span>finalevelgames@contact.com</p></li>
                        <li style="padding-top:10px;"><a href="#" target="_blank"><img src="img/Facebook.png" alt="socialmedia" class="fb socialmedia" /></a>
                    <a href="#" target="_blank"><img src="img/Twitter.png" alt="socialmedia" class="tw socialmedia" /></a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom">
                    <div class="tencol">
                        <p class="footer-content">This site is not official and is an assignment for a UCF Digital Media course <br />designed by Miki Nagai</p>
                </div>
                
                <div class="twocol last"><img src="img/payment.gif" alt="" /></div>
            </div>
        </div>
    
    </div>
    
    -->
</div><!--page_warp-->

</body>
</html>