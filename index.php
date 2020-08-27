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
				<router class="navbar__menu--item router-link" router='/notifications'><i class="fal fa-bell"></i></router>
				<router class="navbar__menu--item router-link" router='/create'><i class="fal fa-plus-hexagon"></i></router>
			</div>
			<div class="navbar__toggle">
				<button class="navbar__toggle--btn">
					<div class="btn-hamburger"></div>
				</button>
				<div class="navbar__toggle--menu">
					<!-- <router>
						<img src="assets/imgs/avt.jpg" alt="">
						<div class="menu-avatar-right">
							<div class="user-name">Minh Phạm</div>
							<div class="user-view">Xem trang của bạn</div>
						</div>
					</router>
					<router>
						<i class="fal fa-cog"></i>
						<div class="menu-body-right">
							<div class="user-name">Cài đặt chung</div>
						</div>
					</router>
					<router>
						<i class="fal fa-sign-out"></i>
						<div class="menu-body-right">
							<div class="user-name">Đăng xuất</div>
						</div>
					</router> -->
					<router class='router-link' router='/signup'>
						<i class="fal fa-user-plus"></i>
						<div class="menu-body-right">
							<div class="user-name">Đăng ký</div>
						</div>
					</router>
					<router class='router-link' router='/signin'>
						<i class="fal fa-sign-in"></i>
						<div class="menu-body-right">
							<div class="user-name">Đăng nhập</div>
						</div>
					</router>
				</div>
			</div>
		</nav>
	</header>
	<div id="app"></div>
	<script src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/js/jquery.min.js" crossorigin></script>
	<script src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/js/router.js"></script>
	<script src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/assets/js/app.js"></script>
</body>
</html>