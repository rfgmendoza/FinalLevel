

$(window).load(function() {
		$('#slider').nivoSlider();
});

<<<<<<< HEAD
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

=======
>>>>>>> fb12f505c61753425b1f69de18d3be216c6790ce
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

<<<<<<< HEAD
	$('body').on('click','#loginSubmit', function(e) {
                   userQuery = $('input#userName').val();
                   passwordQuery = $('input#password').val();
                   AJAX.login();
        });

	$( "button#submitUserInfo" ).click(function() {
		$( "form#client-general-inf" ).submit();
		});

	$( "button#registerUser" ).click(function() {
		$( "form#client-general-inf" ).submit();
		});
    
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
>>>>>>> fb12f505c61753425b1f69de18d3be216c6790ce

