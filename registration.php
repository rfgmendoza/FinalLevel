<?php

session_start();
    
    $userQuery = $_SESSION['username'];
    $passwordQuery = $_SESSION['password'];
    
    //CHECK WHAT USER IS LOGGED IN

    // echo "<script type='text/javascript'>alert('" . $userQuery . "');</script>";

   
    $_SESSION['username'] = $userQuery;
    $_SESSION['password'] = $passwordQuery;
	include ('includes/head.php');
	include ('includes/header.php');
?>

    
    <div class="client-content">
    	<div class="container">
        	<div class="row">
            	<div class="threecol">
                	<ul class="client-menu" style="opacity: 0;">
                    	<li><span><img src="img/equals.png" alt="user" /></span><a href="#">Overview</a></li>
                        <li><span><img src="img/user.png" alt="user" /></span><a href="#">My Account</a></li>
                        <li><span><img src="img/book.png" alt="user" /></span><a href="#">My Orders</a></li>
                        <li><span><img src="img/business-card.png" alt="user" /></span><a href="#">Payment Info</a></li>
                        <li><span><img src="img/edit.png" alt="user" /></span><a href="#">Wish List</a></li>
                    </ul>
                </div><!--threecol-->
                <div class="nicecol last">
                	<div class="general-infor-form">
                    	<p class="client-header">Create An Account</p>
                        
						<div class="line"></div>
                        <form id="client-general-inf" action="addUser.php">
                            <fieldset>
                                <p><label>Username</label>
                                    <span><input id="username" type="text" name="username" value="User Name" onClick="this.value = '';" onKeyDown="this.style.color = '#4b4b4b';" /></span></p>
                                <p><label>Password</label>
                                    <span><input id="password" name="password" type="text" value="Password" onClick="this.value = '';" onKeyDown="this.style.color = '#4b4b4b';" /> </span></p>
                                <p><label>Full Name</label>
                                    <span><input id="firstname" type="text" name="firstName" value="First Name"  value="Password" onClick="this.value = '';" onKeyDown="this.style.color = '#4b4b4b';" /><input id="lastname" name="lastName" type="text" value="Last Name" value="Password" onClick="this.value = '';" onKeyDown="this.style.color = '#4b4b4b';" /></span></p>
                                <!-- <p><label>Business or C/O</label><input type="text" /></p> -->
                                <p><label>Street Address</label><input type="text" name="street" /></p>
                                <!-- <p><label>Unit</label><input type="text" value="Apt, Suite" /></p> -->
                                <p><label>State</label>
                               
                                <select name="state" id="state" required=""> <option value="">Select</option> <option value="AL">Alabama</option> <option value="AK">Alaska</option> <option value="AZ">Arizona</option> <option value="AR">Arkansas</option> <option value="CA">California</option> <option value="CO">Colorado</option> <option value="CT">Connecticut</option> <option value="DE">Delaware</option> <option value="DC">District of Columbia</option> <option value="FL">Florida</option> <option value="GA">Georgia</option> <option value="HI">Hawaii</option> <option value="ID">Idaho</option> <option value="IL">Illinois</option> <option value="IN">Indiana</option> <option value="IA">Iowa</option> <option value="KS">Kansas</option> <option value="KY">Kentucky</option> <option value="LA">Louisiana</option> <option value="ME">Maine</option> <option value="MD">Maryland</option> <option value="MA">Massachusetts</option> <option value="MI">Michigan</option> <option value="MN">Minnesota</option> <option value="MS">Mississippi</option> <option value="MO">Missouri</option> <option value="MT">Montana</option> <option value="NE">Nebraska</option> <option value="NV">Nevada</option> <option value="NH">New Hampshire</option> <option value="NJ">New Jersey</option> <option value="NM">New Mexico</option> <option value="NY">New York</option> <option value="NC">North Carolina</option> <option value="ND">North Dakota</option> <option value="OH">Ohio</option> <option value="OK">Oklahoma</option> <option value="OR">Oregon</option> <option value="PA">Pennsylvania</option> <option value="RI">Rhode Island</option> <option value="SC">South Carolina</option> <option value="SD">South Dakota</option> <option value="TN">Tennessee</option> <option value="TX">Texas</option> <option value="UT">Utah</option> <option value="VT">Vermont</option> <option value="VA">Virginia</option> <option value="WA">Washington</option> <option value="WV">West Virginia</option> <option value="WI">Wisconsin</option> <option value="WY">Wyoming</option> <option value="--">----- U.S Territory -----</option> <option value="AS">American Samoa</option> <option value="FM">Fed. Micronesia</option> <option value="GU">Guam</option> <option value="MH">Marshall Island</option> <option value="MP">N. Mariana Is.</option> <option value="PW">Palau Island</option> <option value="PR">Puerto Rico</option> <option value="VI">U.S. Virgin Islands</option> </select></p>
                                
                               <p><label>zipcode</label><input type="text" name="zip" /></p>
                               <p><label>Phone</label><input type="text" name="phone" /></p>
                               <p><label class="check-label" style="width:auto !important;"> <input type="checkbox" name="smsOptIn" id="sms-optin"> <em></em> <span>I'd like to receive mobile text alerts from Final Level Games.</span> </label></p>
                               <p style="margin-bottom: 36px"><label>Email Address</label><input type="text" name="email" /></p>
                               <input type="hidden" name="register" value="register" />
                               <?php 
                               session_start();
    
                               $userQuery = $_SESSION['username'];
                               echo '<input type="hidden" value="' . $userQuery . '" name="user" />'; ?>

                               
                          </fieldset>      
                        </form>
                        
                        <button type="button" title="Checkout" id="registerUser" class="button btn-proceed-checkout btn-checkout"><span><span>Submit</span></span></button>
                        
                    </div>
                </div><!--ninecol-->
            </div><!--row-->
        </div><!--container-->
    </div>
    
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
                        <li><a target="_blank" href="admin.php">Admin</a></li>
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
            </div><!--row-->
            <div class="row footer-bottom">
            	<div class="tencol">
                	<p class="footer-content">This site is not official and is an assignment for a UCF Digital Media course <br />designed by Miki Nagai</p>
                </div>
                
                <div class="twocol last"><img src="img/payment.gif" alt="" /></div>
            </div>
        </div>
    
    </div><!--footer-->
    
</div><!--page_warp-->
<?php
    $_SESSION['username'] = $userQuery;
    $_SESSION['password'] = $passwordQuery;
?>
</body>
</html>
