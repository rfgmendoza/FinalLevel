<?php

require_once('db_connect.php');

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Final Level Games Home – Miki Nagai</title>
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
    <div id="header">
        <div id="header-top">
            <div class="container">
                <div class="row">
                    <div id="search" class="twelvecol" style="text-align:right;">
                        <input type="text" id="search-bar" name="filter_name" value="Search" onclick="this.value = '';" onkeydown="this.style.color = '#4b4b4b';">
                    </div>
                </div><!--row-->
            </div>
        </div><!--header-top-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="threecol">
                        <img src="img/logo_2.png" alt="logo" />
                    </div><!--three col-->
                    <div class="ninecol last user-menu">
                        
                        <div id="cart">
                            <div class="heading">
                              <div class="background"></div>
                              <div class="mini_header_cart"><a href="cart.php" class="cart_empty">My cart (3 items)</a></div>
                            </div>
                        </div><!--cart-->
                        
                        <ul>
                            <li class="account">
                                <div class="background"></div>
                                <a href="client.php">account</a>
                            </li>
                            <li class="login">
                            	<div class="background"></div>
                                <a href="login.php">login</a>
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
                    </div><!--nine col-->
                </div>
            </div>
        </div><!--header-bottom-->
    </div><!--header-->
    
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
    </div><!--navigation-->
    
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="twelvecol last">
                    
                   
                </div><!--threecol-->
            </div>
        </div>
    </div><!--content-->
    
    
    <!--
    <div id="banner">
        <div class="container">
            <div class="row">
                <div class="sixcol"><img src="img/banner1.png" alt="banner" /></div>
                <div class="sixcol last"><img src="img/banner2.png" alt="banner" /></div>
            </div>
        </div>
    </div>
    -->
    
    <div id="products">
        <div class="container" style="position:relative;">
            <div class="row">
                <div class="container">
                    <div class="twelvecol">
						<p>FinaLevel Games knows that you care about your privacy and the use of your personal information. This notice describes our Privacy Policy.  This Privacy Policy applies to information we collect about you from our Website.</p>
						<p>By visiting a FinaLevel Website, or otherwise providing information FinaLevel you are accepting the practices described in this Privacy Policy. </p>

						<p>In this Privacy Policy, " FinaLevel " means FinaLevel Games, Inc., its Websites located in the United States and Puerto Rico.  "Website(s)" means FinaLevel operated websites and mobile applications, including finalevelgames.com.  Our Websites may contain links to other websites.  FinaLevel is not responsible for the privacy practices or the content of such other websites.  The word "computer" means any device used to connect to a Website, including, but not limited to, mobile devices. </p>
						<h2>We Gather the Following Personal Information About Customers:</h2>
						<h3>Information That You Give Us: </h3>
						<p> We receive and store any information you enter on our Websites or that you give us in any other way. You can choose not to provide certain information, but this will limit your ability to purchase products offered on the Websites, or to take advantage of some features or promotions.</p>

						<p>When you place an order with us online, in a store or in any other way, your contact information is used to communicate related information, such as order and shipment confirmation, release date changes and requests for more information to facilitate processing your order. You may opt-out of these communications by canceling your order. </p>

						<p>We use customer contact information to customize future shopping for you, to improve our Websites, to send you information about our company, and to inform you of sales and special offers. If, after receiving a non-order related email, you do not want to receive such emails in the future, you can notify us by clicking on the "unsubscribe" link attached to each email. </p>
						<p>We obtain information about you when you search, buy, participate in a contest or questionnaire, communicate with customer service, or otherwise contact us or post information on our Websites. For example, you provide information when you search for a product; place an order through a Website or provide information to update or create your account with us (you may have more than one account if you have used more than one email address when shopping with us); communicate with us by phone, email, or otherwise; complete a questionnaire or a contest entry form; create any wish or gift list; participate in any forums or discussion areas or product reviews; or create any alerts or other email notification services we may offer now or in the future. The information collected typically includes your name, address, and phone numbers; credit card information; people to whom purchases have been shipped, including addresses and phone number; content of reviews you may provide; emails to us; and any other personal information that you provide to us or post on the Websites. </p>
						<h3>We occasionally run our own email surveys</h3>
						<p> and we ask visitors for contact, demographic and technical information. We use contact data from our surveys to send users information about our company. This information is also used to contact visitors to learn more about specific problems they might have reported or to give them rewards, if such a reward program is part of the survey. The demographic information is used to learn more about the types of people who visit our site. </p>
						<h3>We run contests in which we ask visitors for contact information</h3> <p> (such as their email address). We use this information to contact the winners. We may also use or share contest information with our business and marketing partners to offer you products or services that we believe may be of interest to you. </p>

						<h3>We allow customers to post reviews</h3><p> and allow visitors to communicate information on products. When posting a review, you can optionally display your name, an alias, or remain anonymous. However, if you disclose personally identifiable information in your review, that information is public information and may increase your chance of receiving unsolicited email. You should use discretion when disclosing information online.</p>

						<h3>Automatic Collection of Information:</h3> <p>If you purchase any products online, or have any other interaction with our Websites, we will receive and store information that you provide or that is generated by your actions.  We may also send you personalized emails.  These communications may contain links to our Websites that could include unique identifiers capable of correlating any resulting web activity to the originating email communication.  Like many websites, we may use tracking pixels/web beacons, "cookies", or other technologies to receive and store certain information, and this information may also be used by certain third-party advertisers with which we have agreements.   Our relationship with third-party advertisers is discussed in more detail under the heading "Third-Party Advertising" below.  For example, cookies are placed on your computer (explained in more detail below) to remember your name and the contents of your shopping cart. This allows you to leave our site, come back later, and still have the contents of your shopping cart intact. It also lets us personalize your experience at our Websites, tailoring the content to your interests. A number of companies offer utilities designed to help you visit websites anonymously, but if you use these utilities, it may limit your ability to use personalized features that we offer. </p>

						<p>The information we receive or can determine from your interaction with our Websites includes your Internet (IP) address; login and password information; email address; web browser type and version; operating system and computer platform; purchase history, which we may aggregate with similar information from other customers; the full Uniform Resource Locator (URL) clickstream to, through, and from our Websites, including date and time; one or more unique identifiers; products you viewed or searched for; areas of our Websites you visited; and the phone number you used to call our toll-free number. We also may log the length of time of your visit and the number of times you visit and purchase from us. We assign you one or more unique identifiers to help keep track of your future visits. </p>

						<h3>Email Communications: </h3><p> We provide email links on our "Customer Services" page that allow you to contact us directly with any questions or comments you may have. We may receive a confirmation when you open any email that we send to you, if your computer supports such capabilities. If you send us any email, we will retain such email and your email address for response. We also may compare our customer list to lists received from other companies, in an effort to avoid sending unnecessary or duplicate messages to you. </p>

						<h2>Information from Other Sources: </h2><p> If we receive any information about you from other sources, we may add it to our account information. For example, if we receive a list of subscribers to a gaming publication, and we note that you are a subscriber, we may include that information in the account information that we store about you. Other examples of information we receive from other sources include updated delivery and address information from our carriers or other third parties, which we use to correct our records; account information, purchase or redemption information, and page-view information from business partners who operate their own websites or for which we provide any services; search term and search result information from searches conducted through the website; and credit history information from credit bureaus, which we use to help prevent and detect fraud. </p>

						<h2>An Explanation of "Cookies"</h2>
						<p>Cookies are alphanumeric identifiers that are placed by us on your computer's storage system through your web browser to enable our systems to recognize your browser when you make future visits to our Websites, and to store certain information (such as items placed in your shopping cart) between visits. </p>

						<p>You can stop your computer from storing cookies if you want to. Most browsers will tell you how to prevent your browser from accepting new cookies, how to have the browser notify you when you receive a new cookie, or how to disable cookies altogether. You should look in the "help" area shown on your browser's toolbar. Because cookies allow you to have the benefit of our personalized features, we recommend that you leave them turned on. You MUST have cookies enabled in order to checkout on our Websites. </p>

						<p>We or our partners may also use Flash Cookies (also known as Local Stored Objects) or other similar technologies. A Flash Cookie is a small data file placed on a computer using Adobe Flash or similar technology that may be built into your computer or downloaded or installed by you to your computer. We use these technologies to personalize and enhance your online experience, facilitate processes, personalize and store your settings. Flash cookies may help our Website visitors to, for example, set volume preference associated with a video experience, play games and perform surveys. They help us improve our sites by measuring which areas are of greatest interest to customers. They may be recognized by other sites or by our marketing or business partners.  Flash cookies are different from browser cookies and the cookie management tools provided by your browser may not remove Flash cookies. If you disable Flash cookies or other similar technologies, please be aware that you may not have access to certain features and services that make your online experience more efficient and enjoyable. </p>
						<h2>Sharing of Information<h2>
						<h3>Tournaments: </h3><p> If you register for tournaments through FinaLevel, we may share your registration data with the tournament host and they may use it for internal tracking and analytics. For instance, if you give us your Xbox Live Gamertag for a Microsoft tournament, Microsoft will use that information for internal research. </p>
						<h3>Sharing with Third Parties. </h3><p> We may share customer information that we collect with third parties. Usually, this information will be shared with a third party that has relationship with us as a business partner or marketing partner (see information on Third-Party Relationships below). Also, we may use the information that you provide us, or that we collect about you, in connection with the promotion of our products and services and those of our affiliates. It is not our policy to sell or rent lists of our Website customers to unaffiliated third parties. </p>
						<h3>Sharing with our Contractors. </h3> <p>We also may employ other companies and individuals to perform functions on our behalf. Examples include order fulfillment, package delivery, postal mail and email communications, customer lists management, data analysis, marketing services and assistance which may include content and ads presented on other websites or mobile applications, credit card processing, and customer relationship management. These companies and individuals have access to personal information needed to perform their functions, but they are not permitted to use such information for other purposes without our permission.  A more detailed discussion of our relationship with certain third-party advertisers is set forth below under the heading "Third-Party Advertising".</p>
						<h3>Promotional Offers May be Sent to You. </h3> <p>We may call you with or send you offers on behalf of our company or other businesses, or permit other businesses that we are working with to call you with or send you offers, if we believe that you may be interested in receiving these offers. If, after receiving a non-order related email, you do not want to receive such emails in the future, you can notify us, by clicking on the "unsubscribe" link attached to each email.  If after receiving a phone call, you wish to no longer receive phone calls from us, you can inform the caller or follow the prompt instructions. </p>
						<h3>Sale or Acquisition of Business Units. </h3> <p>As we continue to develop our business, we may buy or sell business divisions or companies, we may merge or combine with another company, or our company itself, or all or a significant part of its assets, may be acquired by another company. We may provide any information we have to a potential counter-party in any such potential transaction.  If such a transaction is completed, customer information generally is one of the transferred and shared business assets. The information transferred and shared remains subject to the promises made in any pre-existing privacy notice (unless, of course, the customer has agreed to be subject to new privacy notice terms). </p>
						<h3>Legal Requirements and Protection of our Websites and Others. </h3> <p>We may decide to release your account and other personal information if we believe release is appropriate or necessary to comply with the law, to enforce or apply our website terms of use and other agreements, or to protect the rights, property, or safety of our Websites, our users, or others. This information may be released or exchanged with other companies and organizations to protect against fraud, or for credit risk reduction. We will cooperate with law enforcement and judicial authorities, and we may provide personally identifiable information to appropriate government authorities upon receipt of a subpoena or court order, or to cooperate with a law enforcement investigation. We will fully cooperate with law enforcement agencies in identifying those who use our services for illegal activities. We also reserve the right to report to law enforcement agencies activities that we in good faith believe to be illegal. We undertake no obligation or duty to release such information, however, unless we are required to do so under applicable law. </p>
						<h3>Other Circumstances. </h3> <p>If we want to share personal information other than as permitted or described above, we will notify you, and you may choose to instruct us not to share the information. </p>
						<h2>Third-Party Relationships</h2>
						<h3>We have several types of third-party relationships. </h3>
						<ul>
							<li>We offer an affiliate program through a third-party affiliate manager. This program allows other websites to earn money by directing people (through links) to our Website. If you sign up as an affiliate, your contact information (website address and related information, email address, mailing and payment addresses, and contact information) is sent to the third-party affiliate manager who activates your affiliate status and pays you based on the sales you generate for our Websites. You may apply for this program using an Affiliate Program application. The Affiliate Program area is clearly labeled, and your information is never collected or shared unless you also fill out an Affiliate Program application.</li>
						<li>We work with business partners to provide you access to their products and services. For example, our Website includes a link to www.alienware.com. Any information you supply upon entering the www.alienware.com site is collected by Alienware.</li>
						<li>We link to third-party surveys. When you complete a purchase, you are often invited to participate in a survey to rate your experience. The survey is conducted by a third party (and is identified as such) who shares all of the survey information with us, including your email address if you specify it in the survey. We use this information to gauge which areas of our service need improving.</li>
						<li>If you order from us after visiting Sony's Playstation.com web site we will forward your PlayStation Underground registration number to Sony along with any information regarding the products you have purchased.</li>

						<h2>Third-Party Advertising:</h2>
						<p>Advertisements that appear on our website are sometimes delivered (or "served") directly to users by third-party advertisers with which we have agreements. They automatically receive your IP address when this happens. These third-party advertisers may also download cookies to your computer, or use other technologies such as JavaScript and "web beacons" (also known as "1x1 gifs" or "clear gifs") to measure the effectiveness of their ads and to personalize advertising content. Doing this allows the advertising network to recognize your computer each time they send you an advertisement in order to measure the effectiveness of their ads and to personalize advertising content. In this way, they may compile information about where individuals using your computer or browser saw their advertisements and determine which advertisements are clicked. Third-Party Advertisers may also serve advertisements to you on other websites, based on their tracking of what content you looked at or interacted with on our Websites.  FinaLevel does not have access to or control of the cookies and other tracking technologies that may be placed by the third-party advertisers. Third-party advertisers have no access to your contact information stored by FinaLevel  unless you choose to share it with them.</p>
						<p>This privacy policy covers the use of cookies by FinaLevel and does not cover the use of cookies or other tracking technologies by any of its advertisers.</p>
						<p>We use third-party advertising companies to serve ads when you visit our Web site. These companies may use aggregated information (not including your name, address, email address or telephone number) about your visits to this and other Websites in order to provide advertisements about goods and services of interest to you. If you would like more information about this practice and to know your choices about not having this information used by these companies, please see:</p><a href=” http://www.networkadvertising.org/managing/opt_out.asp”>  http://www.networkadvertising.org/managing/opt_out.asp. </a>


						<h2>Security of Information Stored by Us</h2>
						<p>When you purchase something from our Websites, we use Secure Sockets Layer (SSL) software, which encrypts certain purchasing information you input, although no known method of data transfer can be guaranteed to be 100% secure. We reveal only the last four digits of your credit card number when confirming an order, but we have to transmit the entire credit card number to the credit card processor or company during order processing.</p>

						<p>To the extent that you use our Websites, and connect to us through your computer, anyone with access to your computer may be able to access our Websites and conduct transactions in your name. We have no ability to know who has access to your computer, or to your credit card information, or who you have authorized to use such computer or information. Persons with access to your computer may be able to view any private or stored account information or other information that you have given to us. Accordingly, you are responsible for any transactions that are made in your name by someone who has access to your computer or your credit card number. It is important for you to protect against unauthorized access to any login or password information, and to your computer.</p>

						<h2>You May Access, Change or Modify Your Personal Information</h2>
						<p>If you have purchased from us or created an account, our site provides you the opportunity to review, correct, or update your account information. You can do this by:</p>
						<p>Accessing FinaLevelgames.com and clicking on the "My Account" link.</p>
						<p>Calling the following telephone number: 1-800-883-8895</p>
						<p>Sending mail to the following postal address:</p>
						FinaLevelgames.com Customer Service<br>
						888 Imaginary Way<br>
						Wallawoo, TX 76051<br>
						<h2>Your Right to Choose (Opt-Out)</h2>
						<p>You always may choose not to provide information and most Internet browsers allow you to control the automatic collection of information from your computer. Obviously, if you choose not to provide necessary information, we may not be able to process your orders or inquiries. If we permit you to update any information that we store about you, we may keep a copy of the previous information for our records.</p>
						<p>If, after receiving a non-order related email, you do not want to receive such emails in the future, you can notify us, by clicking on the "unsubscribe" link attached to each email.</p>
						<h3>Children's Privacy</h3>
						<p>Our Websites, services and applications are designed for and directed at people 13 years of age or older.  We do not knowingly collect information from children under 13.  If FinaLevel learns that a child under the age of 13 has submitted personally identifiable information online in contravention of these measures, it will take all reasonable measures to delete such information from its databases and to not use such information for any purpose (except where necessary to protect the safety of the child or other as required or allowed by law).  If you become aware of any personal information we have collected from children under 13, please contact us at:</p>
						FinaLevelgames.com Customer Service<br>
						888 Imaginary Way<br>
						Wallawoo, TX 76051<br>
						<p>For additional tips on how to help children stay safe on the Internet, we recommend that you visit the following sites:</p>
						<ul>
							<li><a href=”www.ftc.gov/privacy/privacyinitiatives/childrens.html”>
							www.ftc.gov/privacy/privacyinitiatives/childrens.html</a></li>
							<li><a href=”www.ftc.gov/bcp/edu/pubs/consumer/tech/tec14.shtm”>
							www.ftc.gov/bcp/edu/pubs/consumer/tech/tec14.shtm</a></li>
							<li><a href=”http://www.onguardonline.gov/features/feature-0002-featured-info-parents”>http://www.onguardonline.gov/features/feature-0002-featured-info-parents</a></li>

						</ul>
						<h3>Conditions of Website Use, Notices, and Revisions</h3>
						<p>If you choose to visit our Websites, your visit(s) and any dispute over privacy is subject to this Privacy Policy and our Conditions of Website Use, including limitations on damages, and application of the law of your state. If you have any concerns or questions about this privacy statement, the practices of the Websites, or your dealings with the Websites, you can contact:</p>
						FinaLevelgames.com Customer Service<br>
						888 Imaginary Way<br>
						Wallawoo, TX 76051<br>

						<h2>We May Change These Terms</h2>
						<p>Whether or not you have viewed our terms and conditions of use of our Websites, or this Privacy Policy, and whether or not you have chosen to not receive notices from us, those terms and notices will still govern your use of finalevelgames.com. As is the case with any business, our business changes over time, and our privacy notice and the Terms and Conditions of Use may be updated or changed at any time, as we deem appropriate. We may email reminders of our notices and conditions. You should frequently check our website to see recent changes to these terms and policies. Unless stated otherwise, our current privacy notice applies to all information that we have about you and your account.</p>

						<h2>California Privacy Rights</h2>
						<p>Pursuant to Section 1798.83 of the California Civil Code, residents of California have the right to request from a business, with whom the California resident has an established business relationship, certain information with respect to the types of personal information the business shares with third parties for direct marketing purposes by such third party and the identities of the third parties with whom the business has shared such information during the immediately preceding calendar year.<p>
						<p>To request a copy of the information disclosure provided by Best Buy pursuant to Section 1798.83 of the California Civil Code, please contact PrivacyManager@finalevel.com</p>


					</div>
                </div>
            </div>
		</div>
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

</body>
</html>
