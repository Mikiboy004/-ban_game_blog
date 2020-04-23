<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<link rel="shortcut icon" href="public/assets/front-end/images/logo_ban_new.png" />
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

	<!-- Date & Time Picker CSS -->
	<link rel="stylesheet" href="public/assets/front-end/css/components/datepicker.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/components/timepicker.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/components/daterangepicker.css" type="text/css" />

	<link rel="stylesheet" href="public/assets/front-end/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="public/assets/front-end/css/components/bs-filestyle.css" type="text/css" />
	<!-- Document Title
	============================================= -->
	<title>Black-List TH | ตรวจสอบรายชื่อคนโกงได้ที่นี่</title>
</head>

<body class="stretched">
	<div id="wrapper" class="clearfix">
		<?php $user = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array(); ?>
		<?php
		$month = array(
			'01'  => 'มกราคม', '02'  => 'กุมภาพันธ์', '03'  => 'มีนาคม',
			'04'  => 'เมษายน', '05'  => 'พฤษภาคม', '06'  => 'มิถุนายน',
			'07'  => 'กรกฎาคม', '08'  => 'สิงหาคม', '09'  => 'กันยายน',
			'10'  => 'ตุลาคม', '11'  => 'พฤศจิกายน', '12'  => 'ธันวาคม',
		);
		function thaiDate($datetime)
		{
			list($date, $time) = explode(' ', $datetime); // แยกวันที่ กับ เวลาออกจากกัน
			list($H, $i, $s) = explode(':', $time); // แยกเวลา ออกเป็น ชั่วโมง นาที วินาที
			list($Y, $m, $d) = explode('-', $date); // แยกวันเป็น ปี เดือน วัน
			$Y = $Y + 543; // เปลี่ยน ค.ศ. เป็น พ.ศ.
			switch ($m) {
				case "01":
					$m = "ม.ค.";
					break;
				case "02":
					$m = "ก.พ.";
					break;
				case "03":
					$m = "มี.ค.";
					break;
				case "04":
					$m = "เม.ย.";
					break;
				case "05":
					$m = "พ.ค.";
					break;
				case "06":
					$m = "มิ.ย.";
					break;
				case "07":
					$m = "ก.ค.";
					break;
				case "08":
					$m = "ส.ค.";
					break;
				case "09":
					$m = "ก.ย.";
					break;
				case "10":
					$m = "ต.ค.";
					break;
				case "11":
					$m = "พ.ย.";
					break;
				case "12":
					$m = "ธ.ค.";
					break;
			}
			return $d . " " . $m . " " . $Y;
		}
		?>
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
								<a href="index">
									<div>หน้าแรก</div>
								</a>
							</li>
							<?php if (!empty($user)) { ?>
								<li class="<?php if ($this->uri->segment(1) == "blog_post") {
												echo 'current';
											} ?>">
									<a href="blog_post">
										<div>โพสบล็อค</div>
									</a>
								</li>
							<?php } ?>
							<li class="<?php if ($this->uri->segment(1) == "blacklist") {
											echo 'current';
										} ?>">
								<a href="blacklist">
									<div>รายชื่อคนโกงทั้งหมด</div>
								</a>
							</li>

							<li class="<?php if ($this->uri->segment(1) == "contact") {
											echo 'current';
										} ?>">
								<a href="contact">
									<div>ติดต่อเรา</div>
								</a>
							</li>
							<?php if ($this->session->userdata('username') == "") { ?>
								<li class="<?php if ($this->uri->segment(1) == "login") {
												echo 'current';
											} ?>">
									<a href="login">
										<div>เข้าสู่ระบบ</div>
									</a>
								</li>
							<?php } ?>

							<?php if (!empty($user)) { ?>
								<li class="<?php if ($this->uri->segment(1) == "profile") {
												echo 'current';
											} ?>">
									<a href="#">
										<div> | <i class="icon-user"></i><?= $user['first_name'] . ' ' . $user['last_name']; ?> <i class="icon-chevron-down1"></i></div>
									</a>
									<ul>
										<li>
											<a href="profile">
												<div>ข้อมูลส่วนตัว</div>
											</a>

										</li>
										<li>
											<a href="order-history">
												<div>ประวัติรายการโพส</div>
											</a>
										</li>
									</ul>
								</li>
								<li style="margin-left:0" class="<?php if ($this->uri->segment(1) == "logout") {
																		echo 'current';
																	} ?>">
									<a href="logout">
										<div>|<i class="icon-signout"></i>ออกจากระบบ |</div>
									</a>
								</li>
							<?php } ?>
						</ul>



					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->

		<?php if ($this->uri->segment(1) != "contact" && $this->uri->segment(1) != "login"  && $this->uri->segment(1) != "profile") { ?>
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
												<button href="#" class="button t400" type="submit" style="border-radius: 0px 20px 20px 0px; z-index:100;">ค้นหา</button>
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