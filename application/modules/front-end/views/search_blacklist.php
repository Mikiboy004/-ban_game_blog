		<!-- Content
		============================================= -->
		<section id="content">
		    <div class="section notopmargin notopborder">
		        <div class="container clearfix">
		            <div class="heading-block center nomargin">
		                <h3>รายชื่อคนโกงที่ชื่อท่านค้นหา</h3>
		            </div>
		        </div>
		    </div>

		    <div class="container clear-bottommargin clearfix">
		        <div class="row">
		            <?php
                    $i = 0;
                    foreach ($post as $post) {
                        $i += 1;
                    ?>
		                <div class="col-lg-4 col-md-6 bottommargin">
		                    <div class="ipost clearfix">
		                        <div class="entry-image">
		                            <a href="blog_detail?id=<?= base64_encode($post['id']); ?>"><img class="image_fade" src="uploads/post/<?= $post['file_name']; ?>" alt="Image"></a>
		                        </div>
		                        <div class="entry-title">
		                            <h3><a href="blog_detail?id=<?= base64_encode($post['id']); ?>"><?= $post['topic']; ?></a></h3>
		                        </div>
		                        <ul class="entry-meta clearfix">
		                            <li><i class="icon-calendar3"></i> <?= thaiDate($post['date_post']); ?></li>
		                            <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li>
		                        </ul>
		                        <div class="entry-content">
		                            <p><?= mb_substr($post['detail'], 0, 100, 'UTF-8');  ?></p>
		                        </div>
		                    </div>
		                </div>
		            <?php
                    }
                    if ($i == 0) {

                    ?>
		                <div class="col-lg-12 col-md-12 bottommargin text-center">
		                    <div class="ipost clearfix">
		                        <div class="entry-title">
		                            <h3 style="font-size:30px; color:red;">**ไม่พบรายชื่อที่ท่านค้นหา**</h3>
		                        </div>

		                    </div>
		                </div>
		            <?php
                    }

                    ?>
		        </div>
		    </div>



		</section><!-- #content end -->