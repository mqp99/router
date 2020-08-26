$('.navbar__toggle--btn').on('click', function () {
	$(this).toggleClass('navbar__toggle--btn--active');
	$('.navbar__menu').toggleClass('navbar__menu--show');
})
$('.navbar__search--box-input').on('keyup', function(e) {
	if(e.keyCode == 13)
    {
		vSearch = $(this).val();
		history.pushState('','', 'search?q='+vSearch);
		$.ajax({
			url: 'views/search.php?q='+vSearch,
			data: { q: vSearch },
			success: function(response) {
				$('#app').html(response);
			}
		})
		console.log(vSearch);
    }
})