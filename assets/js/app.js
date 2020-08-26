$(document).on('submit','form',function (e) {
	valueSearch = $('#q').val();
	history.pushState('','','search?q='+valueSearch);
	$.ajax({
		url: 'views/search.php',
		method: "get",
		data:{
			q: valueSearch
		},success:function(data){
			$('#app').html(data);
		}
	})
	return false;
})