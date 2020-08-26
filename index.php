<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
	<style>
		*:focus {
			outline: none;
		}
		body {
			font-family: sans-serif;
		}
		img.error {
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		input,
		button {
			margin-bottom: 10px;
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
		<button class="nav-router" router='/'>Home</button>
		<button class="nav-router" router='/about'>About</button>
		<button class="nav-router" router='/contact'>Contact</button>
		<form action='/search' method="get">
			<div>
				<input type="text" name="q" id="q" value="<?php echo isset($_GET['q']) ?$_GET['q']: ''; ?>" tabindex="1" placeholder="Mày muốn tìm gì ?" />
				<button>Send</button>
			</div>
		</form>
	</nav>
	<div id="app"></div>
	<script src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/js/jquery.min.js" crossorigin></script>
	<script src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/js/router.js"></script>
	<script src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/js/app.js"></script>
</body>
</html>