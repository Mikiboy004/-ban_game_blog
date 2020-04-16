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
                            <h2 class="content-header-title float-left mb-0">ข้อมูลการโพส</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="Dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">ข้อมูลการโพส
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
                                    <h4 class="card-title">ข้อมูลการโพส</h4>
                                    <div>
                                        <!-- <button type="button" class="btn btn-primary mr-1 mb-1" data-toggle="modal" data-target="#exampleModal">+ เพิ่ม List Order ลงตาม template</button></a> -->

                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text"></p>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>

                                                        <th>No.</th>
                                                        <th>รูปภาพ</th>
                                                        <th>ชื่อผู้โพส</th>
                                                        <th>หัวข้อ</th>
                                                        <th>รายละเอียด</th>
                                                        <th>วันที่สร้าง</th>
                                                        <th>สถานะ</th>
                                                        <th>เครื่องมือ</th>
                                                    </tr>
                                                </thead>


                                                <?php $i = 1 ?>
                                                <tbody>
                                                    <?php foreach ($post as $key => $post) { ?>
                                                        <tr>
                                                            <td><?php echo $i++ ?></td>
                                                            <td><?php echo $post['file_name']; ?></td>
                                                            <td><?php echo $post['user_id']; ?></td>
                                                            <td><?php echo $post['topic']; ?></td>
                                                            <td><?php echo $post['detail']; ?></td>
                                                            <td><?php echo $post['date_post']; ?></td>
                                                            <?php if ($post['status'] == 0) : ?>
                                                                <td>ยังไม่ผ่านการอนุมัติโพส</td>
                                                            <?php else : ?>
                                                                <td>ผ่านการอนุมัติโพส</td>
                                                            <?php endif; ?>

                                                            <td>

                                                                <button data-toggle="modal" data-target="#exampleModala<?php echo $post['id']; ?>" type="button" class="btn btn-primary"><i class="feather icon-edit" style="font-size: 25px;"></i>ดูคอมเม้น</button>
                                                                <button onclick="confirmalertdelete_Post('<?php echo $post['id']; ?>')" class="btn btn-danger " type="button" aria-haspopup="true" aria-expanded="false"><i class="feather icon-trash" style="font-size: 25px;"></i>
                                                                    ลบ
                                                                </button>
                                                                <div class="modal fade" id="exampleModala<?php echo $post['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg" role="document">
                                                                        <form action="banner_edit_com" method="post" class="form-horizontal" enctype="multipart/form-data">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">คอมเม้น</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <input type="text" name="id" value="<?php echo $post['id']; ?>" hidden>

                                                                                <div class="modal-body">
                                                                                    <table class="table zero-configuration">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>No.</th>
                                                                                                <th>รูปภาพ</th>
                                                                                                <th>คนที่มาคอมเม้น</th>
                                                                                                <th>คอมเม้น</th>
                                                                                                <th>วันที่คอมเม้น</th>
                                                                                                <th>เครื่องมือ</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <?php $i = 1 ?>
                                                                                        <?php $data = $this->db->get_where('tbl_comment', ['post_id' => $post['id']])->result_array(); ?>
                                                                                        <tbody>
                                                                                            <?php foreach ($data as $key => $data) { ?>
                                                                                                <tr>
                                                                                                    <td><?php echo $i++ ?></td>
                                                                                                    <td><?php echo  $data['file_name'] ?></td>
                                                                                                    <td><?php echo  $data['user_id'] ?></td>
                                                                                                    <td><?php echo  $data['comment'] ?></td>
                                                                                                    <td><?php echo  $data['created_at'] ?></td>
                                                                                                    <td>
                                                                                                        <button onclick="confirmalertdelete_comment('<?php echo $data['id']; ?>')" class="btn btn-danger " type="button" aria-haspopup="true" aria-expanded="false"><i class="feather icon-trash" style="font-size: 15px;"></i>
                                                                                                            ลบ
                                                                                                        </button>
                                                                                                    </td>

                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                        <tbody>
                                                                                    </table>
                                                                                    <div class="modal-footer">
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                        </form>
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