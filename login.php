<?php
    
    include ('includes/head.php');
    include ('includes/header.php');
?> 
    
    <div class="login-content">
    	<div class="container">
        	<div class="row">
                <div class="sixcol">
                <div class="padded1">
                	<p class="login-header">REGISTERED CUSTOMERS</p>
                    
                    <form id="client-general-inf">
                        <fieldset>
                    	<p><label>Username </label><input id="userName" type="text" class="field" /></p>
                        <p><label>Password </label><input id="password" type="password" class="field"/></p>
                        <a href="#" style="font-weight: lighter;display:block;;font-size: 12px;text-decoration: underline;">Forgot Password</a> <br />
                        <button type="button" title="signin" id="loginSubmit" class="button btn-proceed-checkout btn-checkout"><span><span>SIGN IN</span></span></button>
                    </fieldset>
                    </form>
                    </div>
                </div>
                <div class="sixcol last">
                <div class="padded2">
                	<p class="client-header">CREATE AN ACCOUNT</p>
                    <p style="font-weight:lighter;">Register with Final Level Games to enjoy personalized services, including:
                    <ul style="font-weight:lighter;margin-top:20px;padding-left:20px;margin-bottom:20px;">
                    	<li>Online Order Status</li>
                        <li>Wish List</li>
                        <li>Exclusive Emails</li>
                        <li>Checkout Preferences</li>
                    </ul>
                    <a class="cartbtn" href="registration.php">Create an Account</a>
                </div></div>
            </div>
        </div>
    </div>
    
    <?php
    include ('includes/footer.php');
    
?>
