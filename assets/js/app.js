$('.navbar__toggle--btn').on('click', function () {
	$(this).toggleClass('navbar__toggle--btn--active');
	$('.navbar__menu').toggleClass('navbar__menu--show');
})