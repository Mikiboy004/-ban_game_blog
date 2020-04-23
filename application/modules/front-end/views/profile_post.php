<!-- Content ============================================= -->
<section id="content">

    <div class="content-wrap clearfix">

        <div class="container">

            <div class="row">
                <div class="col-12 mb-3">
                    <h5><a href="index">หน้าแรก</a> / ประวัติการโพส</h5>
                    <div class="feature-box fbox-small fbox-center fbox-plain fbox-large nobottomborder">
                        <div class="card">
                            <div class="card-header text-left" style="color:#000;">ประวัติการโพส</div>
                            <div class="card-body ">
                                <div class="row" style="margin-top:50px;">
                                    <div class="col-lg-2 col-xd-2"></div>
                                    <div class="col-lg-8 col-xd-8 col-sm-12">
                                        <div class="card-content text-center">
                                            <table class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#ลำดับ</th>
                                                        <th>หัวข้อ</th>
                                                        <th>วันที่สร้าง</th>
                                                        <th>สถานะ</th>
                                                        <!-- <th>ใบเสร็จรับเงิน</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($my_post as $my_post) { ?>
                                                        <tr>
                                                            <td><?= $i++; ?></td>
                                                            <td class="text-left">
                                                                <?php if ($my_post['status'] == 1) { ?>
                                                                    <a href="blog_detail?id=<?= base64_encode($my_post['id']); ?>"><?= $my_post['topic']; ?></a>
                                                                <?php } else { ?>
                                                                    <?= $my_post['topic']; ?>
                                                                <?php } ?>
                                                            </td>
                                                            <td><?= thaiDate($my_post['date_post']); ?></td>
                                                            <td>
                                                                <?php if ($my_post['status'] == 1) { ?>
                                                                    <span class="badge badge-success">เปิดใช้งาน</span>
                                                                <?php } else { ?>
                                                                    <span class="badge badge-danger">รอตรวจสอบ</span>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-xd-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>



</section><!-- #content end -->
<script src="public/assets/front-end/js/newjs.js"></script>