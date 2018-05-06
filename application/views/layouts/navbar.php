
</head>
<body>

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Body content -->

<div class="header-connect">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-8  col-xs-12">
                <div class="header-half header-call">
                    <p>
                        <span><i class="pe-7s-call"></i> 086-211-7963</span>
                        <span><i class="pe-7s-mail"></i> info@agada.com</span>
                    </p>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                <div class="header-half header-social">
                    <ul class="list-inline">
                        <li><a href="<?php echo base_url('#'); ?>"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo base_url('#'); ?>"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo base_url('#'); ?>"><i class="fa fa-vine"></i></a></li>
                        <li><a href="<?php echo base_url('#'); ?>"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="<?php echo base_url('#'); ?>"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="<?php echo base_url('#'); ?>"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End top header -->

<nav class="navbar navbar-default ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('หน้าแรก'); ?>"><img src="assets/img/logo.png" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
            <div class="button navbar-right">
                <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('<?php echo base_url('ฝากขาย-บ้าน-คอนโด-ฟรี')?>')" data-wow-delay="0.45s">ฝากขายฟรี</button>
                <?php if($this->session->userdata('username') ==""){ ?>
                    <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('<?php echo base_url('สมัครสมาชิก')?>')" data-wow-delay="0.48s">เข้าสู่ระบบ<?php echo $this->session->userdata('username') ?></button>
                <?php }else{ ?>
                    <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('<?php echo base_url('register/logout')?>')" data-wow-delay="0.48s">ออกจากระบบ</button>
                <?php } ?>

            </div>
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="dropdown ymm-sw " data-wow-delay="0.1s"><a href="<?php echo base_url('ซื้อ-ขาย-บ้าน'); ?>" class="dropdown-toggle active" >บ้าน </b></a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="<?php echo base_url('ซื้อ-ขาย-ทาวน์เฮ้าส์'); ?>">ทาวน์เฮ้าส์</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="<?php echo base_url('ซื้อ-ขาย-คอนโดมิเนียม'); ?>">คอนโดมิเนียม</a></li>
                <li class="dropdown yamm-fw" data-wow-delay="0.4s">
                    <a href="<?php echo base_url('#'); ?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">ประเภทอสังหาริมทรัพย์ <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">

                                    <?php foreach($categories as $category){ ?>

                                        <div class="col-sm-3">
                                            <h5><?php echo $category['category_name'] ?></h5>
                                            <ul>

                                                <?php if(is_array($category['sub_category'])){
                                                    foreach($category['sub_category'] as $sub) { ?>

                                                        <li><a href="<?php echo base_url($sub['sub_category_id']); ?>"><?php echo $sub['sub_category_name']?></a>  </li>

                                                    <?php }
                                                } ?>

                                            </ul>
                                        </div>

                                    <?php  } ?>

                                    <div class="col-sm-3">
                                        <h5>อื่นๆ</h5>
                                        <ul>
                                            <li><a href="<?php echo base_url('property-1.html'); ?>">ที่ดิน</a> </li>
                                            <li><a href="<?php echo base_url('property-2.html'); ?>">สินปลูกสร้าง</a> </li>
                                            <li><a href="<?php echo base_url('property-3.html'); ?>">ตึกเก่า</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="<?php echo base_url('ติดต่อเรา'); ?>">ติดต่อเรา</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- End of nav bar -->