$(".js-burger").on('click', function () {
	/*console.log('hi');*/
	$(".wrapper").toggleClass("menu-mobile-collapsed");
	setTimeout(function() {
	  $('.wrapper').toggleClass('menu-ani-in');
	}, 100);
	clearTimeout();
});
$(".menu-item-has-children").on('click', function () {
	$(this).toggleClass("menu-mobile-content-collapsed");
	setTimeout(function() {
	  $(".menu-item-has-children").toggleClass('menu-ani-in');
	}, 200);
	clearTimeout();
});
