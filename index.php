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
			padding: 10px;
			color: #555;
			border: 1px solid #888;
			background: transparent;
		}
		button.current-router {
			color: #fff;
			border: 1px solid;
			background: #555;
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
	<script type='module' src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/js/router.js"></script>
</body>
</html>