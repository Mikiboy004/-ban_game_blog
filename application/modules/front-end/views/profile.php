<!-- Content ============================================= -->
<section id="content">

    <div class="content-wrap clearfix">

        <div class="container">

            <div class="row">
                <div class="col-12 mb-3">
                    <h5>ข้อมูลส่วนตัว</h5>
                    <div class="feature-box fbox-small fbox-center fbox-plain fbox-large nobottomborder">
                        <div class="card">
                            <div class="card-header text-left" style="color:#000;">ข้อมูลส่วนตัว</div>
                            <div class="card-body ">
                                <div class="row" style="margin-top:50px;">
                                    <div class="col-lg-2 col-xd-2"></div>
                                    <div class="col-lg-8 col-xd-8 col-sm-12">
                                        <div class="card-content text-left">
                                            <form id="register-form" class="nobottommargin" action="edit_profile" method="post" enctype="multipart/form-data">
                                                <div class="col_full text-center">
                                                    <?php if (!isset($userlist['file_name'])) { ?>
                                                        <img src="public/assets/front-end/images/author/male-user.png" id="blah" style="border-radius: 50%;width: 20%;">
                                                    <?php } else { ?>
                                                        <img src="uploads/user/<?php echo $userlist['file_name'];  ?>" id="blah" style="border-radius: 50%;width: 20%;">
                                                    <?php } ?>
                                                </div>
                                                <input type="hidden" name="id_user" value="<?php echo $userlist['id_user']; ?>">
                                                <div class="col_full">
                                                    <label for="register-form-name">รูปโปรไฟล์: <span style="color:red;">*</span></label>
                                                    <input type="file" id="imgInp" name="file_name" accept="image/gif, image/jpeg, image/png" class="form-control" />
                                                </div>

                                                <div class="row">
                                                    <div class="col_full col-md-6 col-sm-12">
                                                        <label for="register-form-name">ชื่อ: <span style="color:red;">*</span></label>
                                                        <input type="text" id="register-form-name" name="first_name" value="<?= $userlist['first_name']; ?>" class="form-control" required />
                                                    </div>

                                                    <div class="col_full col-md-6 col-sm-12">
                                                        <label for="register-form-name">นามสกุล: <span style="color:red;">*</span></label>
                                                        <input type="text" id="register-form-name" name="last_name" value="<?= $userlist['last_name']; ?>" class="form-control" required />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col_full col-md-6 col-sm-12">
                                                        <label for="register-form-name">รหัสบัตรประชาชน: <span style="color:red;">*</span></label>
                                                        <input type="text" id="register-form-name" name="id_card" value="<?= $userlist['id_card']; ?>" class="form-control" required />
                                                    </div>
                                                    <div class="col_full col-md-6 col-sm-12 travel-date-group">
                                                        <label for="register-form-name">วันเกิด: <span style="color:red;">*</span></label>
                                                        <?php
                                                        $birthdayFormat = explode('-', $userlist['birthday']);
                                                        ?>
                                                        <input type="text" id="register-form-name" name="birthday" value="<?= $birthdayFormat[2] . '/' . $birthdayFormat[1] . '/' . $birthdayFormat[0]; ?>" class="form-control default" required />
                                                    </div>
                                                </div>
                                                <div class="col_full">
                                                    <label for="register-form-name">ที่อยู่: <span style="color:red;">*</span></label>
                                                    <textarea name="address" class="form-control" required id="" cols="30" rows="5"><?= $userlist['address']; ?></textarea>
                                                </div>



                                                <div class="col_full">
                                                    <label for="register-form-email">อีเมล: <span style="color:red;">*</span></label>
                                                    <input type="text" id="register-form-email" name="email" value="<?= $userlist['email']; ?>" class="form-control" required />
                                                </div>
                                                <div class="row">
                                                    <div class="col_full col-md-6 col-sm-12">
                                                        <label for="register-form-email">ไอดีไลน์:</label>
                                                        <input type="text" id="register-form-email" name="line_id" value="<?= $userlist['line_id']; ?>" class="form-control" />
                                                    </div>

                                                    <div class="col_full col-md-6 col-sm-12">
                                                        <label for="register-form-phone">เบอร์โทรศัพท์ติดต่อ: <span style="color:red;">*</span></label>
                                                        <input type="text" id="register-form-phone" name="tel" value="<?= $userlist['tel']; ?>" class="form-control" required />
                                                    </div>
                                                </div>

                                                <div class="col_full nobottommargin">
                                                    <button class="button button-3d button-black nomargin" type="submit" id="register-form-submit" name="register-form-submit" value="register">อัพเดทข้อมูล</button>
                                                    <button class="button button-3d button-primary nomargin" type="button" data-toggle="modal" data-target=".bs-example-modal-lg">เปลี่ยนรหัสผ่าน</button>
                                                </div>

                                            </form>
                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-body">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">เปลี่ยนรหัสผ่าน</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form id="register-form" class="nobottommargin" action="edit_password" method="post" enctype="multipart/form-data">

                                                                    <input type="hidden" name="id_user" value="<?php echo $userlist['id_user']; ?>">

                                                                    <div class="col_full">
                                                                        <label for="register-form-email">รหัสผ่านเก่า: <span style="color:red;">*</span></label>
                                                                        <input type="password" id="register-form-email" name="old_password" value="" class="form-control" required />
                                                                    </div>
                                                                    <div class="col_full">
                                                                        <label for="register-form-email">รหัสผ่านใหม่: <span style="color:red;">*</span></label>
                                                                        <input type="password" id="register-form-email" name="new_password" value="" class="form-control" required />
                                                                    </div>
                                                                    <div class="col_full">
                                                                        <label for="register-form-email">ยืนยันรหัสผ่านใหม่: <span style="color:red;">*</span></label>
                                                                        <input type="password" id="register-form-email" name="confirm_new_password" value="" class="form-control" required />
                                                                    </div>



                                                                    <div class="col_full nobottommargin">
                                                                        <button class="button button-3d button-black nomargin" type="submit" id="register-form-submit" name="register-form-submit" value="register">อัพเดทข้อมูล</button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
</script>