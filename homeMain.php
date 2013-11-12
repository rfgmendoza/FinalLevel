<?php
    
    include ('includes/head.php');
    include ('includes/header.php');
?>    
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="ninecol">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="img/slider1.png" alt="slider-1" />
                            <img src="img/slider2.png" alt="" />
                            <img src="img/slider3.png" alt="" />
                        </div>
                    </div>
                </div><!--eightcol-->
                <!-- <div class="threecol last">
                    <div id="loginform">
                        <p class="title">login</p>
                        <p>
                            <label for="nd_username">Username:</label>
                            <input type="text" class="text" name="log" id="userName" placeholder="Username">
                        </p>
                        <p>
                            <label for="nd_password">Password:</label> 
                            <input type="password" class="text" name="pwd" id="password" placeholder="Password">
                        </p>
                        <p style="margin-top:20px;">
                            <a class="forgotten" href="#nd_lost_password_form">You can not login?</a> 
                            <input type="submit" id="loginSubmit" class="button" value="Login">
                        </p>
                    </div>
                </div> --><!--threecol-->
            </div>
        </div>
    </div><!--content-->
    
    
    <!--
    <div id="banner">
        <div class="container">
            <div class="row">
                <div class="sixcol"><image src="image/banner1.png" alt="banner" /></div>
                <div class="sixcol last"><image src="image/banner2.png" alt="banner" /></div>
            </div>
        </div>
    </div>
    -->
    
    <div id="products">
        <div class="container" style="position:relative;">
            <div class="row">
                <div class="container">
                    <div class="twelvecol"><p class="featured">Featured Games For Girls</p></div>
                </div>
            </div>
            <div class="row">
                <?php include ('includes/homedeal.php'); ?>
                        
                     
            
            </div><!--row-->
        </div>
    </div><!--products-->
    <br>
<?php
    include ('includes/footer.php');
    
?>
