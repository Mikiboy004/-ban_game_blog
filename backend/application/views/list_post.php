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
                                    <li class="breadcrumb-item"><a href="Dashboard">Dashboard</a>
                                    </li>
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
                                    <h4 class="card-title">List Post</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text"></p>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>หัวข้อ</th>
                                                        <th>คนโพสหัวข้อ</th>
                                                        <th>วันที่-เวลาที่โพส</th>
                                                        <th>สถานะ</th>
                                                        <th>ข้อมูลโพส</th>
                                                        <th>ความคิดเห็น</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1 ?>
                                                    <?php foreach ($post as $key => $data) {
                                                        $nameUser = $this->db->get_where('tbl_user', ['id_user' => $data['user_id']])->row_array();
                                                    ?>

                                                        <tr>
                                                            <td><?php echo $i++ ?></td>
                                                            <td><?php echo $data['topic']; ?></td>
                                                            <td><?php echo $nameUser['first_name'] . ' ' . $nameUser['last_name']; ?></td>
                                                            <td><?php echo $data['date_post']; ?></td>
                                                            <td style="font-size: 18px;"><?php if ($data['status'] == 0) {
                                                                                                echo '<span class="badge badge-primary">รอตรวจสอบ</span>';
                                                                                            } elseif ($data['status'] == 1) {
                                                                                                echo '<span class="badge badge-success">อนุมัติ</span>';
                                                                                            } else {
                                                                                                echo '<span class="badge badge-warning">ไม่อนุมัติ</span>';
                                                                                            }
                                                                                            ?></td>
                                                            <td>
                                                                <button data-toggle="modal" data-target="#exampleModala<?php echo $data['id']; ?>" type="button" class="btn btn-primary">
                                                                    <i class="fa fa-id-card"></i> ดูข้อมูล
                                                                </button>
                                                                <div class="modal fade" id="exampleModala<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">

                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $data['topic']; ?></h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>


                                                                            <div class="modal-body">

                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">รูปโปรไฟล์</label>
                                                                                        <div class="form-control" style="width:50%; height:auto; margin:auto;">
                                                                                            <?php if (isset($data['file_name'])) { ?>
                                                                                                <img src="../uploads/post/<?php echo $data['file_name']; ?>" style="max-width: 100%;">
                                                                                            <?php } else { ?>
                                                                                                <img src="../public/assets/front-end/images/small/2.jpg" style="max-width: 100%;">
                                                                                            <?php } ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">รายละเอียด</label>
                                                                                        <textarea class="form-control" cols="30" rows="10" disabled style="background:#fff;"><?php echo $data['detail']; ?></textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">คนโพสหัวข้อ</label>
                                                                                        <div class="form-control"><?php echo $nameUser['first_name'] . ' ' . $nameUser['last_name']; ?></div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">วันที่-เวลาที่โพส</label>
                                                                                        <div class="form-control"><?php echo $data['date_post']; ?></div>
                                                                                    </div>
                                                                                </div>



                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">สถานะ</label>
                                                                                        <div style="font-size: 18px; height:auto;">
                                                                                            <a href="change_statusPost?id=<?php echo $data['id']; ?>&status=1" style="display: inline-block;">
                                                                                                <button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> 
                                                                                                อนุมัติ
                                                                                                </button>
                                                                                            </a>
                                                                                            <a href="change_statusPost?id=<?php echo $data['id']; ?>&status=2" style="display: inline-block;">
                                                                                                <button type="button" class="btn btn-warning"><i class="fa fa-times-circle"></i>  
                                                                                                    ไม่อนุมัติ
                                                                                                </button>
                                                                                            </a>
                                                                                            <button onclick="confirmalertdelete_Post('<?php echo $data['id']; ?>')" class="btn btn-danger " type="button" aria-haspopup="true" aria-expanded="false"><i class="feather icon-trash"></i>
                                                                                                ลบ
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>



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

                                                            <td>
                                                                <button data-toggle="modal" data-target="#exampleModalComment<?php echo $data['id']; ?>" type="button" class="btn btn-primary">
                                                                    <i class="fa fa-id-card"></i> ดูความคิดเห็น
                                                                </button>
                                                                <div class="modal fade" id="exampleModalComment<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">

                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $data['topic']; ?></h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>


                                                                            <div class="modal-body">

                                                                                <?php $comment = $this->db->get_where('tbl_comment') ?>
                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">ความคิดเห็น</label>
                                                                                        <textarea class="form-control" cols="30" rows="5" disabled style="background:#fff;"><?php echo $data['detail']; ?></textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                                    <div class="form-group">
                                                                                        <label for="helpInputTop">สถานะ</label>
                                                                                        <div style="font-size: 18px; height:auto;">
                                                                                            
                                                                                            <button onclick="confirmalertdelete_comment('<?php echo $data['id']; ?>')" class="btn btn-danger " type="button" aria-haspopup="true" aria-expanded="false"><i class="feather icon-trash"></i>
                                                                                                ลบ
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>





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