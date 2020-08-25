<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
	<style>
		body {
			font-family: sans-serif;
		}
		img {
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		button {
			padding: 5px;
		}
		button.current-router {
			padding: 10px;
		}
	</style>
</head>
<body>
	<nav>
		<button router='/'>Home</button>
		<button router='/about'>About</button>
		<button router='/contact'>Contact</button>
	</nav>
	<div id="app"></div>
	<script src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/js/jquery.min.js" crossorigin></script>
	<script src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/js/router.js"></script>
</body>
</html>