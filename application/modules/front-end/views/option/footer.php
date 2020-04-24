	<?php if ($this->uri->segment(1) != "contact" && $this->uri->segment(1) != "login" && $this->uri->segment(1) != "profile") { ?>
		<div class="container clearfix">

			<div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="2" data-items-md="2" data-items-lg="2" data-items-xl="2">
				<?php
				$banner = $this->db->get('tbl_banner')->result_array();
				foreach ($banner as $bannerDetail) { ?>
					<div class="oc-item"><a href="<?php echo $bannerDetail['link']; ?>" target="_blank"><img src="uploads/banner/<?php echo $bannerDetail['file_name']; ?>" alt="Clients"></a></div>
				<?php } ?>
			</div>


		</div>
	<?php } ?>
	<!-- Footer
		============================================= -->
	<footer id="footer" class="dark">

		<div class="container">

			<!-- Footer Widgets
============================================= -->
			<div class="footer-widgets-wrap clearfix">

				<div class="col_two_third">

					<div class="col_one_third">

						<div class="widget clearfix">

							<img src="public/assets/front-end/images/logo_ban.png" alt="" class="footer-logo">

						</div>

					</div>

					<div class="col_one_third">

						<div class="widget widget_links clearfix">

							<h4>BLACKLIST</h4>

							<ul>
								<li class="<?php if ($this->uri->segment(1) == "index" || $this->uri->segment(1) == "") {
												echo 'current';
											} ?>">
									<a href="index">
										<div><i class="icon-news"></i> หน้าแรก</div>
									</a>
								</li>
								<?php if (!empty($user)) { ?>
									<li class="<?php if ($this->uri->segment(1) == "blog_post") {
													echo 'current';
												} ?>">
										<a href="blog_post">
											<div><i class="icon-line2-note"></i>โพสบล็อค</div>
										</a>
									</li>
								<?php } ?>
								<li class="<?php if ($this->uri->segment(1) == "blacklist") {
												echo 'current';
											} ?>">
									<a href="blacklist">
										<div><i class="icon-user-secret"></i> รายชื่อคนโกงทั้งหมด</div>
									</a>
								</li>

								<li class="<?php if ($this->uri->segment(1) == "contact") {
												echo 'current';
											} ?>">
									<a href="contact">
										<div><i class="icon-line-mail"></i> ติดต่อเรา</div>
									</a>
								</li>
								<?php if ($this->session->userdata('username') == "") { ?>
									<li class="<?php if ($this->uri->segment(1) == "login") {
													echo 'current';
												} ?>">
										<a href="login">
											<div><i class="icon-line2-login"></i> เข้าสู่ระบบ</div>
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
											<li class="<?php if ($this->uri->segment(1) == "profile") {
															echo 'current';
														} ?>">
												<a href="profile">
													<div>ข้อมูลส่วนตัว</div>
												</a>

											</li>
											<li class="<?php if ($this->uri->segment(1) == "profile_post") {
															echo 'current';
														} ?>">
												<a href="profile_post">
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

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix">
							<h4>CONTACT</h4>

							<ul>
								<li><i class="icon-email"></i> cgmtv19@gmail.com</li>
								<li><i class="icon-phone-sign"></i> 0968595549</li>
							</ul>

						</div>

					</div>

				</div>

				<div class="col_one_third col_last">


					<div id="fb-root"></div>
					<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v6.0&appId=2624489384466641&autoLogAppEvents=1"></script>
					<div class="fb-page" data-href="https://www.facebook.com/TH.BlackList/" data-tabs="timeline" data-width="" data-height="210" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
						<blockquote cite="https://www.facebook.com/TH.BlackList/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TH.BlackList/">BLACK LIST - รายชื่อคนโกง</a></blockquote>
					</div>


				</div>

			</div><!-- .footer-widgets-wrap end -->

		</div>

		<!-- Copyrights
			============================================= -->
		<div id="copyrights">

			<div class="container clearfix">

				<div class="col_half">
					Copyrights &copy; 2020 All Rights BlackListTH.com<br>

				</div>


			</div>

		</div><!-- #copyrights end -->

	</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="public/assets/front-end/js/jquery.js"></script>
	<script src="public/assets/front-end/js/plugins.js"></script>
	<!-- Range Slider Plugin -->
	<script src="public/assets/front-end/js/components/rangeslider.min.js"></script>
	<script src="public/assets/front-end/sweetalert2.js"></script>

	<!-- Bootstrap File Upload Plugin -->
	<script src="public/assets/front-end/js/components/bs-filestyle.js"></script>

	<!-- TinyMCE Plugin -->
	<script src="public/assets/front-end/js/components/tinymce/tinymce.min.js"></script>
	<!-- Footer Scripts
	============================================= -->
	<script src="public/assets/front-end/js/functions.js"></script>

	<!-- Date & Time Picker JS -->
	<script src="public/assets/front-end/js/components/moment.js"></script>
	<script src="public/assets/front-end/js/components/datepicker.js"></script>
	<script src="public/assets/front-end/js/components/timepicker.js"></script>
	<!-- Include Date Range Picker -->
	<script src="public/assets/front-end/js/components/daterangepicker.js"></script>

	<script src="public/assets/front-end/ckeditor/ckeditor.js"></script>
	<script>
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace('editor1', {
			height: 300
		});
	</script>

	<script>
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace('editor2');
	</script>

	<script>
		jQuery(document).ready(function() {
			$(".price-range-slider").ionRangeSlider({
				type: "double",
				prefix: "$",
				min: 200,
				max: 10000,
				step: 100,
				max_postfix: "+",
				input_values_separator: ' to '
			});
			$("#freelance-quote-sample").fileinput({
				browseClass: "btn btn-secondary",
				browseIcon: "",
				removeClass: "btn btn-danger",
				removeLabel: "",
				removeIcon: "<i class='icon-trash-alt1'></i>",
				showUpload: false
			});
		});
	</script>

	<script>
		<?php if ($this->session->flashdata('success_login')) : ?>
			Swal.fire({
				position: 'start-end',
				icon: 'success',
				title: 'Welcome',
				showConfirmButton: false,
				timer: 1500
			});
		<?php endif; ?>
		<?php if ($this->session->flashdata('fail_login')) : ?>
			Swal.fire({
				position: 'start-end',
				icon: 'error',
				title: 'รหัสผ่านไม่ถูกต้อง',
				showConfirmButton: true,
			});
		<?php endif; ?>
		<?php if ($this->session->flashdata('checkEdit_profileId_card')) : ?>
			Swal.fire({
				position: 'start-end',
				icon: 'error',
				title: 'มีรหัสบัตรประชาชนนี้อยู่ในระบบแล้ว กรุณาใช้รหัสบัตรประชาชนใหม่!!',
				showConfirmButton: true,
			});
		<?php endif; ?>
		<?php if ($this->session->flashdata('checkEdit_profileEmail')) : ?>
			Swal.fire({
				position: 'start-end',
				icon: 'error',
				title: 'มีอีเมลนี้อยู่ในระบบแล้ว กรุณาใช้อีเมลใหม่!!',
				showConfirmButton: true,
			});
		<?php endif; ?>
		<?php if ($this->session->flashdata('edit_profileSuccess')) : ?>
			Swal.fire({
				position: 'start-end',
				icon: 'success',
				title: 'การแก้ไขโปรไฟล์สำเร็จ !!',
				showConfirmButton: true,
			});
		<?php endif; ?>
		<?php if ($this->session->flashdata('edit_profileFail')) : ?>
			Swal.fire({
				position: 'start-end',
				icon: 'error',
				title: 'การแก้ไขโปรไฟล์ล้มเหลว กรุณาลองใหม่อีกครั้ง!!',
				showConfirmButton: true,
			});
		<?php endif; ?>
		<?php if ($this->session->flashdata('old_passwordCheck')) : ?>
			Swal.fire({
				position: 'start-end',
				icon: 'error',
				title: 'รหัสผ่านเก่าของคุณไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง!!',
				showConfirmButton: true,
			});
		<?php endif; ?>
		<?php if ($this->session->flashdata('newPasswordCheck')) : ?>
			Swal.fire({
				position: 'start-end',
				icon: 'error',
				title: 'รหัสผ่านใหม่และยืนยันรหัสผ่านใหม่ของคุณไม่ตรงกัน กรุณากรองให้ตรงกัน!!',
				showConfirmButton: true,
			});
		<?php endif; ?>
		<?php if ($this->session->flashdata('newPasswordSuccess')) : ?>
			Swal.fire({
				position: 'start-end',
				icon: 'success',
				title: 'การแก้ไขรหัสผ่านสำเร็จ !!',
				showConfirmButton: true,
			});
		<?php endif; ?>
		<?php if ($this->session->flashdata('newPasswordFail')) : ?>
			Swal.fire({
				position: 'start-end',
				icon: 'error',
				title: 'การแก้ไขรหัสผ่านล้มเหลว กรุณาลองใหม่อีกครั้ง!!',
				showConfirmButton: true,
			});
		<?php endif; ?>

		$(function() {
			$('.travel-date-group .default').datepicker({
				autoclose: true,
				endDate: "today",
				format: "dd/mm/yyyy",
			});
		});
	</script>

	</body>

	</html>