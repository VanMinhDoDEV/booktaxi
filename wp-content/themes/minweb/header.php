<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="author" content="DynamicLayers" />
		<?php $urlTheme = get_bloginfo ( 'stylesheet_directory' ); ?>
		<?php wp_head(); ?>
	</head>

	<body <?php echo body_class(); ?>>
		<?php if(is_home()) { ?>
			<div class="site-preloader">
				<div class="car">
					<div class="strike"></div>
					<div class="strike strike2"></div>
					<div class="strike strike3"></div>
					<div class="strike strike4"></div>
					<div class="strike strike5"></div>
					<div class="car-detail spoiler"></div>
					<div class="car-detail back"></div>
					<div class="car-detail center"></div>
					<div class="car-detail center1"></div>
					<div class="car-detail front"></div>
					<div class="car-detail wheel"></div>
					<div class="car-detail wheel wheel2"></div>
				</div>
			</div>
		<?php } ?>

		<header class="main-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-wrap">
						<div class="top-left">
							<p>Giải pháp đặt taxi đáng tin cậy!</p>
						</div>
						<div class="top-right">
							<ul class="top-header-nav">
								<li><a href="<?php echo get_site_url(); ?>/lien-he">Hỗ trợ</a></li>
								<li><a href="<?php echo get_site_url(); ?>/hoi-dap">Hỏi đáp</a></li>
							</ul>
							<ul class="header-social-share">
								<li>
									<a href="#"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-linkedin"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="mid-header">
				<div class="container">
					<div class="mid-header-wrap">
						<div class="site-logo">
							<a href="<?php echo get_site_url(); ?>"><img src="<?php  echo $urlTheme ?>/assets/img/logo-dark.png" alt="logo" /></a>
						</div>
						<ul class="header-info">
							<li>
								<div class="header-info-icon">
									<i class="las la-phone-volume"></i>
								</div>
								<div class="header-info-text">
									<h3><span>Gọi chúng tôi ngay</span><a href="tel:<?php echo get_option( 'phone' ); ?>"><?php echo get_option( 'phone' ); ?></a></h3>
								</div>
							</li>
							<li>
								<div class="header-info-icon">
									<i class="las la-envelope-open"></i>
								</div>
								<div class="header-info-text">
									<h3><span>Email</span><?php echo get_option( 'email' ); ?></h3>
								</div>
							</li>
							<li>
								<div class="header-info-icon">
									<i class="las la-map-marked-alt"></i>
								</div>
								<div class="header-info-text">
									<h3><span>Địa chỉ</span><?php echo get_option( 'address' ); ?></h3>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="nav-menu-wrapper">
				<div class="container">
					<div class="nav-menu-inner">
						<div class="site-logo">
							<a href="<?php echo get_site_url(); ?>"><img src="<?php  echo $urlTheme ?>/assets/img/logo-dark.png" alt="Logo" /></a>
						</div>
						<div class="header-menu-wrap">
							<?php wp_nav_menu( array( 
								'theme_location' =>'main_nav', 
								'container' => 'false', 
								'menu_id' => 'main-nav', 
								'menu_class' => 'nav-menu' 
								) ); ?>
						</div>
						<div class="menu-right-item">
							<div class="search-icon dl-search-icon">
								<i class="las la-search"></i>
							</div>
							<div class="sidebox-icon dl-sidebox-icon">
								<i class="las la-bars"></i>
							</div>
							<a href="#booking-section" class="menu-btn">Đặt taxi</a>
						</div>
						<div class="mobile-menu-icon">
							<div class="burger-menu">
								<div class="line-menu line-half first-line"></div>
								<div class="line-menu"></div>
								<div class="line-menu line-half last-line"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="popup-search-box">
			<div class="box-inner-wrap d-flex align-items-center">
				<form id="form" action="<?php bloginfo( 'url' ); ?>" method="get" role="search">
					<input id="popup-search" type="text" name="s" value="<?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?>" placeholder="Nhập từ khóa tìm kiếm..." />
					<button id="popup-search-button" type="submit" name="submit">
						<i class="las la-search"></i>
					</button>
				</form>
				<div class="search-close"><i class="las la-times"></i></div>
			</div>
		</div>

		<div id="searchbox-overlay"></div>
		<div id="popup-sidebox" class="popup-sidebox">
			<div class="sidebox-content">
				<div class="site-logo">
					<a href="<?php echo get_site_url(); ?>"><img src="<?php  echo $urlTheme ?>/assets/img/logo-light.png" alt="logo" /></a>
				</div>
				<p>Mọt lúc mọi nơi ngay khi các bạn cần taxi hãy gọi ngay cho chúng tôi. Sự hài lòng của các bạn chính là mục tiêu của chúng tôi!</p>
				<ul class="sidebox-list">
					<li class="call"><span>Gọi ngay nhé:</span><?php echo get_option( 'phone' ); ?></li>
					<li><span>Bạn có thể tìm chúng tôi:</span><?php echo get_option( 'address' ); ?></li>
					<li><span>Email:</span><?php echo get_option( 'email' ); ?></li>
				</ul>
			</div>
		</div>
	</body>
</html>
