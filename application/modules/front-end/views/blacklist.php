

<!-- Content
		============================================= -->
        <section id="content">
	<div class="heading-block center nobottomborder" style="    margin-top: 50px;">
		<span class="ls2 t700" style="color:#e74c3c;font-size:1.9rem">รายชื่อคนโกงทั้งหมด</span>
	</div>
	<div class="content-wrap notoppadding clearfix">

		<div class="container clearfix" style="margin-bottom: 80px;">
			<div class="service-box margin-bottom-25">
				<div class="row no-margin">
					<div class="col-4 form-group">
						<a href="" target="">
							<img src="uploads/img/LineTime.png">
						</a>
					</div>
					<div class="col-4 form-group">
						<a href="" target="">
							<img src="uploads/img/LineTime.png">
						</a>
					</div>
					<div class="col-4 form-group">
						<a href="" target="">
							<img src="uploads/img/LineTime.png">
						</a>
					</div>
					<div class="col-4 form-group">
						<a href="" target="">
							<img src="uploads/img/LineTime.png">
						</a>
					</div>
					<div class="col-4 form-group">
						<a href="" target="">
							<img src="uploads/img/LineTime.png">
						</a>
					</div>
					<div class="col-4 form-group">
						<a href="" target="">
							<img src="uploads/img/LineTime.png">
						</a>
					</div>

				</div>
			</div>
		</div>

	</div>

	<div class="heading-block center nobottomborder" style="    margin-top: 50px;">
		<span class="ls2 t700" style="color:#e74c3c;font-size:1.9rem">แบนเนอร์</span>
	</div>
	<div class="content-wrap notoppadding clearfix">

		<div class="container clearfix" style="margin-bottom: 80px;">
			<div class="service-box margin-bottom-25">
				<div class="row no-margin">
					<?php foreach ($banner as $bannerDetail) { ?>
						<div class="col-12 form-group">
							<a href="" target="">
								<img src="uploads/banner/<?php echo $bannerDetail['file_name']; ?>">
							</a>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>

	</div>

</section><!-- #content end -->