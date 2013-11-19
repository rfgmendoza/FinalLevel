<?php
    
    include ('includes/head.php');
    include ('includes/header.php');
?>    
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="twelvecol last">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="img/slider1.png" alt="slider-1" />
                            <img src="img/slider2.png" alt="" />
                            <img src="img/slider3.png" alt="" />
                        </div>
                    </div>
                </div><!--eightcol-->
                
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
