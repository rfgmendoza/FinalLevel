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
                <TR> <TH>Key</TH> <TH>User Name</TH> <TH>Password</TH> <TH>First Name</TH> <TH>Last Name</TH> <TH>Street</TH> <TH>City</TH><TH>State</TH> <TH>Zip</TH> <TH>Phone</TH><TH>&nbsp;</TH> </TR>
                </THEAD>
                
                <TBODY>
                <?php
                $host="sulley.cah.ucf.edu"; // Host name 
                $username="as932055"; // Mysql username 
                $password="01knights!"; // Mysql password 
                $db_name="as932055"; // Database name 
                $tbl_name="Directory"; // Table name

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
                            echo "<script type='text/javascript'>window.location=\"home.php\";</script>";
                        }
                    }
                } 

                $sql="SELECT * FROM $tbl_name";
                $result = mysql_query($sql);
                while($row = mysql_fetch_array($result))
                {
                    echo '<form action="reviseUserInfo.php?id=' . $row[0] . '" method="post">';
                    echo '<TR> <TD class="id"> ' . $row[0] . '</TD><TD>' . $row[12] . '</TD> <TD>' . $row[3] . '</TD> <TD>' . $row[5] . '</TD> <TD>' . $row[6] . '</TD> <TD>' . $row[7] . '</TD>  <TD>' . $row[8] . '</TD> <TD>' . $row[9] . '</TD> <TD>' . $row[9] . '</TD> <TD>' . $row[10] . '</TD> </TR>';
                    echo '<TR class="form"> 
                    
                                        <TD>
                                                &nbsp;
                                        </TD> 
										<TD>
                                                <input type="text" style="width:150px;" placeholder="user name" id="username" name="username"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:200px;" placeholder="password" id="password" name="password"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:200px;" placeholder="first name" id="firstName" name="firstName"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:30px;" placeholder="last name" id="lastName" name="lastName"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:30px;" placeholder="street" id="street" name="street"/>
                                        </TD>  
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="city" id="city" name ="city"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="state" id="state" name="state"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="zip" id="zip" name="zip"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="phone" id="phone" name="phone"/>
                                        </TD> 
                                        <TD><input type="submit" id="addUser" value="Edit"><a href="deleteUser.php?id=' . $row[0] . '">Delete</a></TD>

                                </TR>
                            </form>';
                }
                ?>
                
                <form action="addUser.php" method="post">
                <TR> <TD colspan="10"><span class="addnew">Add new</span></TD>  </TR>
                
                
                <TR class="form"> 
                    	<TD>
                                                &nbsp;
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:150px;" placeholder="user name" id="username" name="username"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:200px;" placeholder="password" id="password" name="password"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:200px;" placeholder="first name" id="firstName" name="firstName"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:30px;" placeholder="last name" id="lastName" name="lastName"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:30px;" placeholder="street" id="street" name="street"/>
                                        </TD>  
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="city" id="city" name ="city"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="state" id="state" name="state"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="zip" id="zip" name="zip"/>
                                        </TD> 
                                        <TD>
                                                <input type="text" style="width:50px;" placeholder="phone" id="phone" name="phone"/>
                                        </TD> 
                                        <TD><input type="submit" id="addUser" value="Add"></TD>  
                        </form>
                                </TR>
                
                </TBODY>
                
                
                </TABLE>
                </div>
            </div>
        </div>
    </div>
</div><!--page_warp-->

</body>
</html>