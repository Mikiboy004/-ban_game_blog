   <!-- BEGIN: Vendor JS-->
   <script src="assets/app-assets/vendors/js/vendors.min.js"></script>
   <script src="assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
   <!-- BEGIN Vendor JS-->

   <!-- BEGIN: Page Vendor JS-->
   <script src="assets/app-assets/vendors/js/ui/jquery.sticky.js"></script>
   <script src="assets/app-assets/vendors/js/charts/apexcharts.min.js"></script>
   <script src="assets/app-assets/vendors/js/extensions/tether.min.js"></script>
   <script src="assets/app-assets/vendors/js/extensions/shepherd.min.js"></script>
   <script src="assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
   <script src="assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
   <script src="assets/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
   <script src="assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
   <script src="assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
   <script src="assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
   <script src="assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
   <script src="assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
   <!-- END: Page Vendor JS-->

   <script src="assets/app-assets/js/scripts/datatables/datatable.js"></script>

   <script src="assets/assets/fileupload/global.js" type="text/javascript"></script>
   <script src="assets/assets/fileupload/js/uploadslider.js" type="text/javascript"></script>

   <!-- BEGIN: Theme JS-->
   <script src="assets/app-assets/js/core/app-menu.js"></script>
   <script src="assets/app-assets/js/core/app.js"></script>
   <script src="assets/app-assets/js/scripts/components.js"></script>
   <!-- END: Theme JS-->

   <!-- BEGIN: Page JS-->
   <script src="assets/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
   <script src="assets/app-assets/js/scripts/extensions/sweet-alerts.js"></script>
   
   <!-- END: Page JS-->

   <script type="text/javascript">
       <?php if ($this->session->flashdata('success_login')) : ?>
           Swal.fire({
               position: 'top-end',
               type: 'success',
               title: 'Welcome.',
               showConfirmButton: false,
               timer: 1500,
               confirmButtonClass: 'btn btn-primary',
               buttonsStyling: false,
           });
       <?php endif; ?>

       <?php if ($this->session->flashdata('dont_click')) : ?>
           Swal.fire({
               title: "Error!",
               text: " You do not have rights!",
               type: "error",
               confirmButtonClass: 'btn btn-primary',
               buttonsStyling: false,
           });
       <?php endif; ?>
       <?php if ($this->session->flashdata('changeStatus')) : ?>
           Swal.fire({
               position: 'top-end',
               type: 'success',
               title: 'เปลี่ยนสถานะเรียบร้อยแล้ว',
               showConfirmButton: false,
               timer: 1500,
               confirmButtonClass: 'btn btn-primary',
               buttonsStyling: false,
           });
       <?php endif; ?>
       <?php if ($this->session->flashdata('changeStatusFail')) : ?>
           Swal.fire({
               title: "Error!",
               text: " เปลี่ยนสถานะไม่สำเร็จ กรุณาลองใหม่อีกครั้ง!!",
               type: "error",
               confirmButtonClass: 'btn btn-primary',
               buttonsStyling: false,
           });
       <?php endif; ?>
   </script>
   <script src="assets/assets/js/sweetalert.min.js"></script>
   <script>
       <?php if ($suss = $this->session->flashdata('save_ss2')) : ?>
           swal("Good job!", '<?php echo $suss; ?>', "success");
       <?php endif; ?>
       <?php if ($error = $this->session->flashdata('del_ss2')) : ?>
           swal("Fail !", '<?php echo $error; ?>', "error");
       <?php endif; ?>
   </script>
   <script>
       function confirmalertdelete(data) {

           swal({
               title: "Are you sure delete slider?",
               text: "Are you sure you want to delete slider ?",
               icon: "warning",
               buttons: true,
               dangerMode: true,
           }).then(function(isConfirm) {
               if (isConfirm) {
                   window.location = 'delete_slider?id=' + data;
               }
           })
       }
   </script>
   <script>
       function confirmalertdelete_banner(data1) {

           swal({
               title: "Are you sure delete? banner",
               text: "Are you sure you want to delete   banner?",
               icon: "warning",
               buttons: true,
               dangerMode: true,
           }).then(function(isConfirm) {
               if (isConfirm) {
                   window.location = 'delete_banner?id=' + data1;
               }
           })
       }
   </script>
   <script>
       function confirmalertdelete_Post(data2) {

           swal({
               title: "แน่ใจใช่หรือไม่ที่จะลบโพสที่ไม่เหมาสม",
               text: "Are you sure you want to delete Post?",
               icon: "warning",
               buttons: true,
               dangerMode: true,
           }).then(function(isConfirm) {
               if (isConfirm) {
                   window.location = 'delete_Post?id=' + data2;
               }
           })
       }
   </script>
   <script>
       function confirmalertdelete_comment(data3) {

           swal({
               title: "แน่ใจใช่หรือไม่ที่จะลบความคิดเห็นที่ไม่เหมาสม",
               text: "Are you sure you want to delete Post?",
               icon: "warning",
               buttons: true,
               dangerMode: true,
           }).then(function(isConfirm) {
               if (isConfirm) {
                   window.location = 'delete_comment?id=' + data3;
               }
           })
       }
   </script>