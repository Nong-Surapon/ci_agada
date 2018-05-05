<!-- End of nav bar -->
<!-- Register Page -->
<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Home New account / Sign in </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">

        <div class="col-md-6">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 register-blocks">
                    <h2>สมัครสมาชิก : </h2>
                    <form action="<?php echo base_url(); ?>register/create_user" method="post">
                        <div class="form-group">
                            <label for="create_username">ชื่อผู้ใช้</label>
                            <input type="text" class="form-control" id="create_username" name="create_username">
                            <span class="text-danger"><?php echo form_error('create_username');?></span>
                        </div>
                        <div class="form-group">
                            <label for="create_email">อีเมล</label>
                            <input type="text" class="form-control" id="create_email" name="create_email">
                            <span class="text-danger"><?php echo form_error('create_email');?></span>
                        </div>
                        <div class="form-group">
                            <label for="create_password">รหัสผ่าน</label>
                            <input type="password" class="form-control" id="create_password" name="create_password">
                            <span class="text-danger"><?php echo form_error('create_');?></span>
                        </div>
                        <div class="text-left">
                            <span class="text-danger"><?php echo $this->session->flashdata("error_create_user");?></span>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="insert" value="create_user" class="btn btn-default">ลงทะเบียน</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 login-blocks">
                    <h2>เข้าสู่ระบบ : </h2>
                    <form action="<?php echo base_url(); ?>register/login_validation" method="post">
                        <div class="form-group">
                            <label for="username">อีเมล์ หรือ ชื่อผู้ใช้</label>
                            <input type="text" class="form-control" id="username" name="username">
                            <span class="text-danger"><?php echo form_error('username');?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">รหัสผ่าน</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <span class="text-danger"><?php echo form_error('password');?></span>
                        </div>
                        <div class="text-left">
                            <span class="text-danger"><?php echo $this->session->flashdata("error");?></span>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default"> Log in</button>
                        </div>

                    </form>
                    <br>

                    <h2>Social login :  </h2>

                    <p>
                        <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a>
                        <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a>
                        <a class="login-social" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>
                    </p>
                </div>

            </div>
        </div>

    </div>
</div>