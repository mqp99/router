<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/scss/app.css">
</head>
<body>
	<header>
		<nav class="navbar">
			<div class="navbar__brand">
				DEMO
			</div>
			<div class="navbar__search">
				<div class="navbar__search--box">
					<input type="text" class="form-input" placeholder="Search...">
				</div>
			</div>
			<div class="navbar__menu">
				<button class="navbar__menu--item router-link" router='/'>Trang chủ</button>
				<button class="navbar__menu--item router-link" router='/about'>Giới thiệu</button>
				<button class="navbar__menu--item router-link" router='/contact'>Liên hệ</button>
			</div>
			<div class="navbar__toggle">
				<button class="navbar__toggle--btn">
					<span class="bar-1"></span>
					<span class="bar-2"></span>
					<span class="bar-3"></span>
				</button>
			</div>
		</nav>
	</header>
	<div id="app"></div>
	<script src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/js/jquery.min.js" crossorigin></script>
	<script src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/js/router.js"></script>
	<script src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/js/app.js"></script>
</body>
</html>