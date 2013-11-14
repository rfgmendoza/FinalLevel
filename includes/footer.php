    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="threecol footer-col">
                	<p class="footer-title">Information</p>
                    <ul>
                    	<li><a href="about.php">About us</a></li>
                        <li><a href="shipping.php">Delivery Information</a></li>
                        <li><a href="privacypolicy.php">Privacy Policy</a></li>
                        <li><a href="conditions.php">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="threecol footer-col">
                	<p class="footer-title">Customer Service</p>
                    <ul>
                    	<li><a href="#">Contact us</a></li>
                        <li><a href="returns.php">Returns</a></li>
                        <li><a href="#">Site map</a></li>
                        <li><a href="test_cases.doc">Use Cases</a></li>
                    </ul>
                </div>
                <div class="threecol footer-col">
                    <p class="footer-title">My Account</p>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Wish List</a></li>
                        <li><a href="#">News Letter</a></li>
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
                    <p class="footer-content">This site is not official and is an assignment for a UCF Digital Media course <br />designed by Rafael Mendoza, Melissa McDermott, Ashley Pajak, Miki Nagai, and James Marquis.
</p>
                </div>
                
                <div class="twocol last"><img src="img/payment.gif" alt="" /></div>
            </div>
        </div>
    
    </div><!--footer-->
    

<?php
    $_SESSION['username'] = $userQuery;
    $_SESSION['password'] = $passwordQuery;
?>
</body>
</html>

