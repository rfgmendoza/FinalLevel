$(window).load(function() {
		$('#slider').nivoSlider();
});

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

$(document).ready(function(){

	quantity = $('#cart-total').html();

	$('.cartQty').append(quantity);

	$('input[name=my-add-button]').click(function() {

	setTimeout(function() {
      window.location.href=window.location.href;
	}, 100);
	});
	

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
    

});