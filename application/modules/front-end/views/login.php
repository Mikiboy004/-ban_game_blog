<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

						<ul class="tab-nav tab-nav2 center clearfix">
							<li class="inline-block"><a href="#tab-login">เข้าสู่ระบบ</a></li>
							<li class="inline-block"><a href="#tab-register">สมัครสมาชิก</a></li>
						</ul>

						<div class="tab-container">

							<div class="tab-content clearfix" id="tab-login">
								<div class="card nobottommargin">
									<div class="card-body" style="padding: 40px;">
										<form id="login-form" class="nobottommargin" action="" onsubmit="login_user();" method="post">

											<h3>เข้าสู่ระบบ</h3>

											<div class="col_full">
												<label for="login-form-username">ชื่อผู้ใช้งาน:</label>
												<input type="text" id="login-form-username" name="username" value="" class="form-control" />
											</div>

											<div class="col_full">
												<label for="login-form-password">รหัสผ่าน:</label>
												<input type="password" id="login-form-password" name="password" value="" class="form-control" />
											</div>

											<div class="col_full nobottommargin">
                                                
                                                <a href="#" class="fright" style="margin-bottom:15px;">ลืมรหัสผ่าน</a>
                                                <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" style="display:block; width:100%;">เข้าสู่ระบบ</button>
                                                <div class="divider divider-center" style="color:#444;"><span class="position-relative" style="top: -2px">OR</span></div>
                                                <a href="#" class="button button-large button-rounded btn-block si-colored si-facebook nott t400 ls0 center nomargin"><i class="icon-facebook-sign"></i> Log in with Facebook</a>
                                            </div>
                                            

										</form>
									</div>
								</div>
							</div>

							<div class="tab-content clearfix" id="tab-register">
								<div class="card nobottommargin">
									<div class="card-body" style="padding: 40px;">
										<h3>สมัครสมาชิก</h3>

										<form id="register-form" class="nobottommargin" action="" onsubmit="register_user();" method="post">

											<div class="col_full">
												<label for="register-form-name">ชื่อ: <span style="color:red;">*</span></label>
												<input type="text" id="register-form-name" name="first_name" value="" class="form-control" required/>
                                            </div>
                                            
                                            <div class="col_full">
												<label for="register-form-name">นามสกุล: <span style="color:red;">*</span></label>
												<input type="text" id="register-form-name" name="last_name" value="" class="form-control" required />
                                            </div>
                                            
                                            <div class="col_full">
												<label for="register-form-name">รหัสบัตรประชาชน: <span style="color:red;">*</span></label>
												<input type="text" id="register-form-name" name="id_card" value="" class="form-control" required />
                                            </div>
                                            
                                            <div class="col_full">
												<label for="register-form-name">ที่อยู่: <span style="color:red;">*</span></label>
												<textarea name="address" class="form-control" required id="" cols="30" rows="5"></textarea>
                                            </div>
                                            
                                            <div class="col_full travel-date-group">
												<label for="register-form-name">วันเกิด: <span style="color:red;">*</span></label>
												<input type="text" id="register-form-name" name="birthday" value="" class="form-control default" required />
											</div>

											<div class="col_full">
												<label for="register-form-email">อีเมล: <span style="color:red;">*</span></label>
												<input type="text" id="register-form-email" name="email" value="" class="form-control" required />
                                            </div>

                                            <div class="col_full">
												<label for="register-form-email">ไอดีไลน์:</label>
												<input type="text" id="register-form-email" name="line_id" value="" class="form-control" />
                                            </div>
                                            
                                            <div class="col_full">
												<label for="register-form-phone">เบอร์โทรศัพท์ติดต่อ: <span style="color:red;">*</span></label>
												<input type="text" id="register-form-phone" name="tel" value="" class="form-control" required />
											</div>

											<div class="col_full">
												<label for="register-form-username">ชื่อผู้ใช้งาน: <span style="color:red;">*</span></label>
												<input type="text" id="register-form-username" name="username" value="" class="form-control" required />
                                            </div>
                                            
                                            <div class="col_full">
												<label for="register-form-password">รหัสผ่าน: <span style="color:red;">*</span></label>
												<input type="password" id="register-form-password" name="password" value="" class="form-control" required />
											</div>

											<div class="col_full">
												<label for="register-form-repassword">ยืนยันรหัสผ่าน: <span style="color:red;">*</span></label>
												<input type="password" id="register-form-repassword" name="confirm_repassword" value="" class="form-control" required />
											</div>

											<div class="col_full nobottommargin">
												<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">สมัครสมาชิก</button>
											</div>

										</form>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

        </section><!-- #content end -->
        
        <script>
            function register_user() {
                event.preventDefault();
                let first_name = $('#register-form').find('input[name="first_name"]').val();
                let last_name = $('#register-form').find('input[name="last_name"]').val();
                let id_card = $('#register-form').find('input[name="id_card"]').val();
                let address = $('#register-form').find('textarea[name="address"]').val();
                let birthday = $('#register-form').find('input[name="birthday"]').val();
                let email = $('#register-form').find('input[name="email"]').val();
                let line_id = $('#register-form').find('input[name="line_id"]').val();
                let tel = $('#register-form').find('input[name="tel"]').val();
                let username = $('#register-form').find('input[name="username"]').val();
                let password = $('#register-form').find('input[name="password"]').val();
                let confirm_repassword = $('#register-form').find('input[name="confirm_repassword"]').val();

                if (password != confirm_repassword) {
                    Swal.fire({
                        position: 'start-end',
                        icon: 'error',
                        title: 'รหัสผ่านและยืนยันรหัสผ่านของคุณไม่ตรงกัน กรุณากรองให้ตรงกัน!!',
                        showConfirmButton: true,
				    });
                }else{
                    $.ajax({
                        url: "register",
                        data:{
                            first_name:first_name,
                            last_name:last_name,
                            id_card:id_card,
                            address:address,
                            birthday:birthday,
                            email:email,
                            line_id:line_id,
                            tel:tel,
                            username:username,
                            password:password,
                            confirm_repassword:confirm_repassword,
                        },
                        method: "POST",
                        success:function(getData){
                            const result = JSON.parse(getData);
                            if (result.successfully == false) {
                                if (result.message == "password not match") {
                                    Swal.fire({
                                        position: 'start-end',
                                        icon: 'error',
                                        title: 'รหัสผ่านและยืนยันรหัสผ่านของคุณไม่ตรงกัน กรุณากรองให้ตรงกัน!!',
                                        showConfirmButton: true,
                                    });
                                }

                                if (result.message == "unavailable id card") {
                                    Swal.fire({
                                        position: 'start-end',
                                        icon: 'error',
                                        title: 'มีรหัสบัตรประชาชนนี้อยู่ในระบบแล้ว กรุณาใช้รหัสบัตรประชาชนใหม่!!',
                                        showConfirmButton: true,
                                    });
                                }

                                if (result.message == "unavailable email") {
                                    Swal.fire({
                                        position: 'start-end',
                                        icon: 'error',
                                        title: 'มีอีเมลนี้อยู่ในระบบแล้ว กรุณาใช้อีเมลใหม่!!',
                                        showConfirmButton: true,
                                    });
                                }

                                if (result.message == "unavailable username") {
                                    Swal.fire({
                                        position: 'start-end',
                                        icon: 'error',
                                        title: 'มีชื่อผู้ใช้งานนี้อยู่ในระบบแล้ว กรุณาใช้ชื่อผู้ใช้งานใหม่!!',
                                        showConfirmButton: true,
                                    });
                                }

                                if (result.message == "register error") {
                                    Swal.fire({
                                        position: 'start-end',
                                        icon: 'error',
                                        title: 'การสมัครสมาชิกล้มเหลว กรุณาลองใหม่อีกครั้ง!!',
                                        showConfirmButton: true,
                                    });
                                }
                            }

                            if (result.successfully == true) {
                                Swal.fire({
                                    position: 'start-end',
                                    icon: 'success',
                                    title: 'สมัครสมาชิกสำเร็จ',
                                    showConfirmButton: true,
                                }).then(
                                    clear = () =>{
                                        $('input[name="first_name"]').val("");
                                        $('input[name="last_name"]').val("");
                                        $('input[name="id_card"]').val("");
                                        $('input[name="address"]').val("");
                                        $('input[name="birthday"]').val("");
                                        $('input[name="email"]').val("");
                                        $('input[name="line_id"]').val("");
                                        $('input[name="tel"]').val("");
                                        $('input[name="username"]').val("");
                                        $('input[name="password"]').val("");
                                        $('input[name="confirm_repassword"]').val("");

                                        window.location = window.location.origin + "/ban_game_blog/login";

                                    }
                                );
                            }
                        }

                    });
                }
                
            }

            function login_user() {
                event.preventDefault();
                let username = $('#login-form').find('input[name="username"]').val();
                let password = $('#login-form').find('input[name="password"]').val();

                $.ajax({
                        url: "loginMe",
                        data:{
                            username:username,
                            password:password,
                        },
                        method: "POST",
                        success:function(getData){
                            const result = JSON.parse(getData);
                            if (result.successfully == false) {
                                Swal.fire({
                                    position: 'start-end',
                                    icon: 'error',
                                    title: 'รหัสผ่านไม่ถูกต้อง',
                                    showConfirmButton: true,
                                });
                            }

                            if (result.successfully == true) {
                                Swal.fire({
                                    position: 'start-end',
                                    icon: 'success',
                                    title: 'เข้าสู่ระบบสำเร็จ',
                                    showConfirmButton: true,
                                }).then(
                                    after_login = () =>{
                                        window.location = window.location.origin + "/ban_game_blog/index";
                                    }
                                );
                            }
                        }

                    });
            }

           
        </script>