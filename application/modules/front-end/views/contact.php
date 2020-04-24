<!-- Contact Form & Map Overlay Section
		============================================= -->
<section id="map-overlay">

	<div class="container clearfix">

		<!-- Contact Form Overlay
				============================================= -->
		<div id="contact-form-overlay" class="clearfix">

			<div class="fancy-title title-dotted-border">
				<h3>ติดต่อเรา</h3>
			</div>

			<div class="form-widget">

				<div class="form-result"></div>

				<!-- Contact Form
						============================================= -->
				<form class="nobottommargin" id="template-contactform" onsubmit="contact_add();" action="" method="post">

					<div class="col_half">
						<label for="template-contactform-name">ชื่อ <small>*</small></label>
						<input type="text" id="template-contactform-name" name="first_name" value="" class="sm-form-control required" />
					</div>

					<div class="col_half col_last">
						<label for="template-contactform-name">นามสกุล <small>*</small></label>
						<input type="text" id="template-contactform-name" name="last_name" value="" class="sm-form-control required" />
					</div>

					<div class="col_half">
						<label for="template-contactform-email">อีเมล <small>*</small></label>
						<input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
					</div>

					<div class="col_half col_last">
						<label for="template-contactform-phone">เบอร์โทรศัพท์ติดต่อ</label>
						<input type="text" id="template-contactform-phone" name="tel" value="" class="required sm-form-control" />
					</div>

					<div class="clear"></div>

					<div class="col_full">
						<label for="template-contactform-subject">หัวข้อ <small>*</small></label>
						<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
					</div>

					<div class="col_full">
						<label for="template-contactform-message">ข้อความ <small>*</small></label>
						<textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
					</div>

					<div class="col_full hidden">
						<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
					</div>



					<div class="col_full">
						<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
					</div>

					<input type="hidden" name="prefix" value="template-contactform-">

				</form>
			</div>


			<div class="line"></div>

			

			

		</div><!-- Contact Form Overlay End -->

	</div>

	<!-- Google Map
			============================================= -->
	<section id="google-map" class="gmap"></section>


</section><!-- Contact Form & Map Overlay Section End -->

<script>
	function contact_add() {
		event.preventDefault();

		let first_name = $('#template-contactform').find('input[name="first_name"]').val();
		let last_name = $('#template-contactform').find('input[name="last_name"]').val();
		let email = $('#template-contactform').find('input[name="email"]').val();
		let tel = $('#template-contactform').find('input[name="tel"]').val();
		let subject = $('#template-contactform').find('input[name="subject"]').val();
		let message = $('#template-contactform').find('textarea[name="message"]').val();

		$.ajax({
			url: "contact_add",
			data: {
				first_name: first_name,
				last_name: last_name,
				email: email,
				tel: tel,
				subject: subject,
				message: message,
			},
			method: "POST",
			success: function(getData) {
				const result = JSON.parse(getData);

				if (result.successfully == false) {
					Swal.fire({
						position: 'start-end',
						icon: 'error',
						title: 'ส่งข้อความล้มเหลว กรุณาลองใหม่อีกครั้ง!!',
						showConfirmButton: true,
					})
				}

				if (result.successfully == true) {
					Swal.fire({
						position: 'start-end',
						icon: 'success',
						title: 'ส่งข้อความสำเร็จ ทางเราจะติดต่อกลับไปยังอีเมลหรือเบอร์โทรศัพท์ติดต่อที่ท่านกรอกมา',
						showConfirmButton: true,
					}).then(
						clear = () => {
							$('input[name="first_name"]').val("");
							$('input[name="last_name"]').val("");
							$('input[name="email"]').val("");
							$('input[name="tel"]').val("");
							$('input[name="subject"]').val("");
							$('textarea[name="message"]').val("");
						}
					);
				}
			}

		});
	}
</script>