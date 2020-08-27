<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title></title>
	<link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/scss/app.css">
</head>
<body>
	<header>
		<nav class="navbar">
			<div class="navbar__brand router-link" router='/'>
				<b>DE</b>MO
			</div>
			<div class="navbar__search">
				<div class="navbar__search--box">
					<input type="text" class="form-input navbar__search--box-input" placeholder="Search...">
				</div>
			</div>
			<div class="navbar__menu">
				<router class="navbar__menu--item router-link" router='/about'>Giới thiệu</router>
				<router class="navbar__menu--item router-link" router='/contact'>Liên hệ</router>
				<router class="navbar__menu--item router-link" router='/signin'>Đăng nhập</router>
			</div>
			<div class="navbar__toggle">
				<button class="navbar__toggle--btn">
					<div class="btn-hamburger"></div>
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