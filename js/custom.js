$(window).load(function() {
		$('#slider').nivoSlider();
});

$(document).ready(function(){
	$('#box-products-wrapper').carouFredSel({
					auto: false,
					prev: '#prev2',
					next: '#next2',
					pagination: "#pager2",
					mousewheel: true,
					swipe: {
						onMouse: true,
						onTouch: true
					}
				});
				
	$(".fb").hover(function() {
		$(this).attr("src","img/Facebook-hover.png");
			}, function() {
		$(this).attr("src","img/Facebook.png");
	});
	
	$(".tw").hover(function() {
		$(this).attr("src","img/Twitter-hover.png");
			}, function() {
		$(this).attr("src","img/Twitter.png");
	});
    
});