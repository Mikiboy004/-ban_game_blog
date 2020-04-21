<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/style.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="public/assets/front-end/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
	<!-- Document Title
	============================================= -->
	<title>Canvas | The Multi-Purpose HTML5 Template</title>
</head>

<body class="stretched">
	<div id="wrapper" class="clearfix">
		<?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(); ?>

				<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-2">

			<div class="container clearfix">

				<!-- Logo
				============================================= -->
				<div id="logo" class="divcenter text-center">
					<a href="index" class="standard-logo" style="display:inline-block;" data-dark-logo="public/assets/front-end/images/logo_ban.png"><img class="divcenter" src="public/assets/front-end/images/logo_ban.png" alt="Canvas Logo"></a>
					<!-- <a href="index" class="retina-logo" data-dark-logo="public/assets/front-end/images/logo_ban@2x.png"><img class="divcenter" src="public/assets/front-end/images/logo_ban@2x.png" alt="Canvas Logo"></a> -->
				</div><!-- #logo end -->

			</div>

			<div id="header-wrap">

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="style-2 center">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

						<ul>
							<li class="<?php if ($this->uri->segment(1) == "index" || $this->uri->segment(1) == "") {
													echo 'current';
												} ?>">
								<a href="index"><div>หน้าแรก</div></a>
							</li>
							<li class="<?php if ($this->uri->segment(1) == "blacklist") {
													echo 'current';
												} ?>">
								<a href="blacklist"><div>รายชื่อคนโกงทั้งหมด</div></a>
							</li>
							<li class="<?php if ($this->uri->segment(1) == "contact") {
													echo 'current';
												} ?>">
								<a href="contact"><div>ติดต่อเรา</div></a>
							</li>
							<li class="<?php if ($this->uri->segment(1) == "register") {
													echo 'register';
												} ?>">
								<a href="contact"><div>สมัครสมาชิก</div></a>
							</li>
							<li class="<?php if ($this->uri->segment(1) == "login") {
													echo 'login';
												} ?>">
								<a href="contact"><div>เข้าสู่ระบบ</div></a>
							</li>
							
						</ul>

						

					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->

		<?php if ($this->uri->segment(1) != "contact") { ?>
		<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<?php
					$slider = $this->db->get('tbl_slider')->result_array();
					foreach ($slider as $slide) {
					?>
						<div class="swiper-slide" style="background-image: url('uploads/slider/<?php echo $slide['file_name']; ?>'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<!-- <h2 data-animate="fadeInUp">Great Performance</h2>
								<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p> -->
								</div>
							</div>
						</div>
					<?php  } ?>

				</div>
				<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
				<div class="slide-number">
					<div class="slide-number-current"></div><span>/</span>
					<div class="slide-number-total"></div>
				</div>
			</div>


		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap" style="padding:80px 0 0;">

				<div class="button button-full button-purple center tright header-stick bottommargin-lg">
					<div class="container clearfix">

						<div class="clearfix center divcenter" style="width:50%;">
							<div class="subscribe-widget" data-loader="button">
								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin h_main" data-animate="fadeInUp" style="padding:0px;border-radius: 20px 20px 20px 20px;margin:auto;">

									<div class="input-group divcenter travel-date-group">
										<input type="text" value="" class="form-control" placeholder="ค้นหารายชื่อคนโกง" style="border: 0; box-shadow: none; overflow: hidden;margin:auto;border-radius: 20px 20px 20px 20px;">
										<div class="input-group-append" style="margin-left: -30px;">
											<button href="#" class="button t400" type="submit" style="border-radius: 0px 20px 20px 0px;">ค้นหา</button>
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>
				</div>

			</div>

		</section><!-- #content end -->
		<?php } ?>


		<script type="text/javascript">
			$('#send_login').click(function() {
				var email = $("#input-email").val();
				var password = $("#input-password").val();
				if (email.length === 0) {
					$('#empty-email').html('The email is empty.').css('color', 'red');
				} else if (email.length !== 0) {
					$('#empty-email').html('').css('color', 'red');
				}
				if (password.length === 0) {
					$('#empty-password').html('The password is empty.').css('color', 'red');
				} else if (password.length !== 0) {
					$('#empty-password').html('').css('color', 'red');
				}

				if (email.length != 0 && password.length !== 0) {
					frmLogin.action = 'loginMe'
					frmLogin.submit();
				} else {

				}

			});
		</script>