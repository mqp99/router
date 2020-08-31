<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<style type="text/css">
		router.current-router {
			color: red!important;
		}
	</style>
</head>
<body>
	<nav>
		<router link='/'>Home</router>
		<router link='/welcome'>Welcome</router>
	</nav>
	<div id="app"></div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="router.class.js"></script>
	<script type="text/javascript">
		var router = new Router(document.querySelector('#app'));
			router.setRouter([
				{
					path: '/',
					url: 'views/home.php',
					title: 'Home'
				},{
					path: '/welcome',
					url: 'views/welcome.php',
					title: 'Welcome'
				}
			])
			router.getRouter();
			router.popstateUrl();
		$('router').on('click',function () {
			vrouter = $(this).attr('link');
			router.render(vrouter);
		})
	</script>
</body>
</html>