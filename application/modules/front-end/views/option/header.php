<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link rel="stylesheet" href="public/assets/front-end/css/newstyle.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/style.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/dark.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

	<!-- Home Demo Specific Stylesheet -->
	<link rel="stylesheet" href="public/assets/front-end/demos/interior-design/interior-design.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/magnific-popup.css" type="text/css" />
	<!-- Date & Time Picker CSS -->
	<link rel="stylesheet" href="public/assets/front-end/css/components/datepicker.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/components/timepicker.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/components/daterangepicker.css" type="text/css" />


	<!-- Reader's Blog Demo Specific Fonts -->
	<link rel="stylesheet" href="public/assets/front-end/demos/interior-design/css/fonts.css" type="text/css" />
	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="public/assets/front-end/css/components/bs-filestyle.css" type="text/css" />
	<link rel="stylesheet" href="public/assets/front-end/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="public/assets/front-end/css/colors.php?color=1c85e8" type="text/css" />
	<script src="public/assets/front-end/js/jquery.js"></script>
	<script src="public/assets/front-end/sweetalert2.js"></script>

	<!-- Document Title
	============================================= -->
	<title>Interior Design Studio | Canvas</title>

</head>
<style>
	img {
		width: 100%;
	}
</style>

<body class="stretched side-push-panel">

	<?php $user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(); ?>

	<div id="side-panel">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget clearfix">

				<!-- <h4 class="t400">Login with Social</h4>

				<a href="#" class="button button-rounded t400 btn-block center si-colored noleftmargin si-facebook">Facebook</a>
				<a href="#" class="button button-rounded t400 btn-block center si-colored noleftmargin si-gplus">Google</a> -->

				<div class="line line-sm"></div>

				<form name="frmLogin" method="post">

					<div class="col_full">
						<label class="t400">Email:</label>
						<input type="email" id="input-email" name="email" value="" class="form-control" />
						<span id="empty-email" style="font-size:12px;"></span>
					</div>

					<div class="col_full">
						<label for="login-form-password" class="t400">Password:</label>
						<input type="password" id="input-password" name="password" value="" class="form-control" />
						<span id="empty-password" style="font-size:12px;"></span>
					</div>

				</form>
				<div class="col_full nobottommargin">
					<button class="button button-rounded t400 nomargin" id="send_login">เข้าสู่ระบบ</button>
					<a class="text-muted fright" data-toggle="modal" data-target="#exampleModal">ลืมรหัสผ่าน</a>
				</div>
			</div>

		</div>

	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">ลืมรหัสผ่าน</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="forget_step1" method="POST">
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
						<button type="submit" class="btn btn-primary">ส่งข้อมูล</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<div class="row justify-content-xl-between justify-content-lg-between clearfix">

						<div class="col-lg-1 col-12 d-flex align-self-center">
							<!-- Logo
							============================================= -->
							<div id="logo">
								<a href="demo-interior-design.html" class="standard-logo"><img src="public/assets/front-end/images/logo_ban.png" alt="Canvas Logo" style="width: 100px;height: auto;    max-width: none !important;"></a>
								<a href="demo-interior-design.html" class="retina-logo"><img src="public/assets/front-end/images/logo_ban.png" alt="Canvas Logo" style="    width: 150px;padding-top: 24px;height: auto; max-width: none !important;"></a>
							</div><!-- #logo end -->

						</div>

						<div class="col-lg-8 col-12 d-xl-flex d-lg-flex justify-content-xl-center justify-content-lg-center">
							<!-- Primary Navigation
							============================================= -->
							<nav id="primary-menu" class="with-arrows fnone clearfix">

								<ul>
									<?php if (!empty($user)) { ?>
										<li class="h_menu">
											<a href="">
												<div><?= $user['email']; ?></div>
											</a>
										</li>
									<?php } ?>
									<li class="<?php if ($this->uri->segment(1) == "index") {
													echo 'current';
												} ?>"><a href="index">
											<div>หน้าแรก</div>
										</a>
									</li>
									
									<li class="<?php if ($this->uri->segment(1) == "blacklist") {
													echo 'current';
												} ?>"><a href="blacklist">
											<div>รายชื่อโกงทั้งหมด</div>
										</a>
									</li>
									<li class="<?php if ($this->uri->segment(1) == "contact") {
													echo 'current';
												} ?>"><a href="contact">
											<div>ติดต่อเรา</div>
										</a>
									</li>
								
									<?php if (!empty($user)) { ?>
									
										<li class="h_menu">
											<a href="logout" style="color:red" onclick="return confirm('Are you sure to logout?');">
												<div>ออกจากระบบ</div>
											</a>
										</li>
									<?php } ?>
								</ul>
							</nav>
							<!-- #primary-menu end -->
						</div>


						<div class="col-lg-3 d-none d-lg-inline-flex d-xl-inline-flex justify-content-end nomargin">
							<?php if (empty($user)) { ?>
								<div id="register_side">
									<a href="register" class="d-none d-lg-block r_and_l"><span> ลงทะเบียน</span></a>
								</div>
								<!-- Top Search
							============================================= -->
								<div id="side-panel-trigger" class="side-panel-trigger">
									<a href="#" class="d-block d-lg-none"><i class="icon-line-lock"></i></a>
									<a href="#" class="d-none d-lg-block r_and_l"><span>เข้าสู่ระบบ</span></a>
								</div><!-- #top-search end -->

							<?php } else { ?>
								<div id="register_side">
									<?php 
										$omeise = $this->db->get_where('tbl_omise',['id_user' => $user['id_user']])->result_array(); 
										$point = 0;
										foreach ($omeise as $omeise_point) {
											$point += $omeise_point['count'];
										}
									?>
									<a href="#"><i class="icon-coins"></i> <?= $point; ?> Coin |</a>
								</div>
								<div id="register_side">
									<a href="logout" class="d-none d-lg-block" style="color:red" onclick="return confirm('Are you sure to logout?');"> ออกจากระบบ</a>
								</div>
							<?php } ?>
						</div>
						<?php if (empty($user)) { ?>
							<a href="#" class="d-block d-lg-none mobile-side-panel side-panel-trigger"><i class="icon-line-arrow-right"></i></a>
						<?php }  ?>
					</div>
				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-element boxed-slider">

			<div class="container clearfix">

				<div class="fslider" data-easing="easeInQuad">
					<div class="flexslider">
						<div class="slider-wrap">
							<?php 
								$slider = $this->db->get('tbl_slider')->result_array();
								foreach ($slider as $slide) {
								
							?>
							<div class="slide" data-thumb="uploads/slider/<?php echo $slide['file_name']; ?>">
								<a href="#">
									<img src="uploads/slider/<?php echo $slide['file_name']; ?>" alt="Slide 2">
									<!-- <div class="flex-caption slider-caption-bg">Responsive Ready Design</div> -->
								</a>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>

			</div>

		</section>

		

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

						<div class="clearfix center divcenter">
							<div class="emphasis-title">
								<h1 class="font-secondary" style="color: #123262;font-size: 2.5rem; font-weight: 900; text-shadow: 0 7px 10px rgba(0,0,0,0.07), 0 4px 4px rgba(0,0,0,0.2);margin-bottom: 1.5rem;">ลงประกาศโฆษณาเชิญประชุมผู้ถือหุ้น กรอบละ <span style="color:#FF0000;">45</span> บาท</h1>
								<p style="font-weight: 300; font-size: 1.75rem; opacity: .7; color: #4A4A4A; text-shadow: 0 -4px 30px rgba(0, 0, 0, .25);margin-top:15px;"><b>ใช้งานง่าย สะดวก รวดเร็ว ประหยัด ดาวน์โหลดหนังสือพิมพ์ได้ในวันถัดไป</b></p>
							</div>
							<div class="subscribe-widget" data-loader="button">
								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin h_main" data-animate="fadeInUp" style="padding:0px;border-radius: 20px 20px 20px 20px;margin:auto;">

									<div class="input-group divcenter travel-date-group">
										<input type="text" value="" class="form-control tleft default" placeholder="ค้นหาหนังสือพิมพ์จากวันที่" style="border: 0; box-shadow: none; overflow: hidden;margin:auto;border-radius: 20px 20px 20px 20px;">
										<div class="input-group-append">
											<button href="#" class="button t400" type="submit" style="border-radius: 0px 20px 20px 0px;">ค้นหา</button>
										</div>
									</div>
								</form>
							</div>
							
						</div>
				

					<div class="clear"></div><div class="line"></div>

				</div>

			</div>

		</section><!-- #content end -->
		
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