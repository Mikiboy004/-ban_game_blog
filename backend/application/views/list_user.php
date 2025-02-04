<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <?php include('option/header.php'); ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <?php include('option/begin_menu.php'); ?>
    <?php include('option/menu.php'); ?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">User</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item active">User
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <!-- <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div> -->

                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Column selectors with Export Options and print table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List User</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text"></p>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>ชื่อผู้ใช้งาน</th>
                                                        <th>อีเมล</th>
                                                        <th>Login ผ่าน Facebook</th>
                                                        <th>วันที่-เวลาที่เป็นสมาชิก</th>
                                                        <th>ข้อมูลสมาชิก</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1 ?>
                                                    <?php foreach ($user as $key => $data) { ?>

                                                        <tr>
                                                            <td><?php echo $i++ ?></td>
                                                            <td><?php echo $data['username']; ?></td>
                                                            <td><?php echo $data['email']; ?></td>
                                                            <td>
                                                                <?php if (isset($data['oauth_provider']) && isset($data['oauth_uid'])) {  ?>
                                                                    <span style="display:none;">1</span>
                                                                    <span class="badge badge-success" style="display:block;"><i class="fa fa-facebook-official" style="font-size:30px;"></i> <i class="fa fa-check" style="font-size:30px;"></i></span>
                                                                <?php }else{  ?>
                                                                    <span style="display:none;">2</span>
                                                                    <span class="badge badge-danger" style="display:block;"><i class="fa fa-facebook-official" style="font-size:30px;"></i> <i class="fa fa-times" style="font-size:30px;"></i></span>
                                                                <?php }  ?>
                                                            </td>
                                                            <td><?php echo thaiDate($data['created_at']); ?></td>
                                                            <td>
                                                                <button data-toggle="modal" data-target="#exampleModala<?php echo $data['id_user']; ?>" type="button" class="btn btn-primary">
                                                                    <i class="fa fa-id-card"></i> ดูข้อมูล
                                                                </button>
                                                                <div class="modal fade" id="exampleModala<?php echo $data['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">

                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $data['username']; ?></h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>


                                                                            <div class="modal-body">

                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">รูปโปรไฟล์</label>
                                                                                        <div class="form-control" style="width:70%; height:auto; margin:auto; text-align:center;">
                                                                                            <?php if (!isset($data['file_name'])) { ?>
                                                                                                <img src="../public/assets/front-end/images/author/male-user.png" style="max-width: 100%;">
                                                                                            <?php } elseif (isset($data['oauth_provider']) && isset($data['oauth_uid'])) { ?>
                                                                                                <img src="<?php echo $data['file_name']; ?>" style="max-width: 100%;">
                                                                                            <?php } else { ?>
                                                                                                <img src="../uploads/user/<?php echo $data['file_name']; ?>" style="max-width: 100%;">
                                                                                            <?php } ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">ชื่อ-นามสกุล</label>
                                                                                        <div class="form-control"><?php echo $data['first_name'] . ' ' . $data['last_name']; ?></div>
                                                                                    </div>
                                                                                </div>



                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">อีเมล</label>
                                                                                        <div class="form-control"><?php echo $data['email']; ?></div>
                                                                                    </div>
                                                                                </div>


                                                                                <?php if (!isset($data['oauth_provider']) && !isset($data['oauth_uid'])) { ?>
                                                                                    <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                        <div class="form-group">
                                                                                            <label for="helpInputTop">เบอร์โทรศัพท์ติดต่อ</label>
                                                                                            <div class="form-control"><?php echo $data['tel']; ?></div>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php } ?>

                                                                                <div class="modal-footer">
                                                                                    <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                                                                        <div class="add-data-btn mr-1">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                            </td>
                                                        </tr>



                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Column selectors with Export Options and print table -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include('option/footer.php'); ?>
    <?php include('option/script.php'); ?>
</body>
<!-- END: Body-->

</html>