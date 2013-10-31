$(window).load(function() {
		$('#slider').nivoSlider();
});

<<<<<<< HEAD
=======
AJAX = {};

AJAX.login = function() {
    var ajaxOptions = {
    data: {test: '1'},
    dataType: 'html',
    error: function(response) {
        alert('AJAX error');
    },
    success: function(response) {
    	window.location = 'confirmLogin.php?userQuery=' + userQuery + '&passwordQuery=' + passwordQuery;
    },
    type: 'GET',
    url: 'confirmLogin.php?userQuery=' + userQuery + '&passwordQuery=' + passwordQuery
    };
    $.ajax(ajaxOptions);
};


>>>>>>> 38c81919be58d9e1314a55250f1ae700bb7edf16
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