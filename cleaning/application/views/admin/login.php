<!DOCTYPE html>
<html dir="ltr">


<!-- Mirrored from jthemes.net/themes/html/orghtml/mendy-admin/html/ltr/authentication-login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jul 2023 10:09:39 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/admin/my-pics/logo.png')?>">
    <title>Cleanex Admin Pannel - The Ultimate Multipurpose admin pannel</title>

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/admin/dist/css/style.min.css')?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader" style="display:none;">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
            style="background:url(<?= base_url('assets/admin/assets/images/big/auth-bg.jpg')?>) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="<?= base_url('assets/admin/my-pics/logo.png')?>"
                                alt="logo" /></span><br>
                        <h5 class="font-medium m-b-20">Sign In to Cleanex Admin</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">

                            <?php if( $error=$this->session->flashdata('msg')):   ?>
                            <div class="alert alert-dismissible alert-danger " style="height: 50px;padding: 14px 22px;">
                                <button type="button" class="close mt-2" data-dismiss="alert"
                                    style="padding: 2px 15px;">&times;</button>
                                <?=$error;  ?>
                            </div>
                            <?php endif; ?>

                            <form class="form-horizontal mt-3" id="loginform" method="POST"
                                action="<?= base_url('AdminLogin/check_login') ?>">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="email" class="form-control form-control-lg" placeholder="Email Address"
                                        aria-label="email" name="email" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i
                                                class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password"
                                        aria-label="Password" name="password" aria-describedby="basic-addon1">
                                </div>

                                <div class="form-group text-center mt-5">
                                    <div class="col-xs-12 p-b-20">
                                        <button class="btn btn-block btn-lg bg-gradient-primary text-white"
                                            type="submit">Log
                                            In</button>
                                    </div>
                                    
                                </div>
                                <h6>Developed By :  Vishal Kumar Maurya</h6>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="recoverform">
                    <div class="logo">
                        <span class="db"><img src="<?= base_url('assets/admin/images/logo-icon.png')?>"
                                alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Recover Password</h5>
                        <span>Enter your Email and instructions will be sent to you!</span>
                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12"
                            action="https://jthemes.net/themes/html/orghtml/mendy-admin/html/ltr/index.html">
                            <!-- email -->
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="email" required=""
                                        placeholder="Username">
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg bg-gradient-primary text-white" type="submit"
                                        name="action">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?= base_url('assets/admin/libs/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/admin/libs/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?= base_url('assets/admin/libs/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>


<!-- All Jquery -->
                <!-- ============================================================== -->
                <script src="<?= base_url('assets/admin/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
                <!-- Bootstrap tether Core JavaScript -->
                <script src="<?= base_url('assets/admin/assets/libs/popper.js/dist/umd/popper.min.js'); ?>"></script>
                <script src="<?= base_url('assets/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
                <!-- apps -->
                <script src="<?= base_url('assets/admin/dist/js/app.min.js'); ?>"></script>
                <script src="<?= base_url('assets/admin/dist/js/app.init.js'); ?>"></script>
                <script src="<?= base_url('assets/admin/dist/js/app-style-switcher.js'); ?>"></script>
                <!-- slimscrollbar scrollbar JavaScript -->
                <script
                    src="<?= base_url('assets/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'); ?>">
                </script>
                <!--Wave Effects -->
                <script src="<?= base_url('assets/admin/dist/js/waves.js'); ?>"></script>
                <!--Menu sidebar -->
                <script src="<?= base_url('assets/admin/dist/js/sidebarmenu.js'); ?>"></script>
                <script src="<?= base_url('assets/admin/dist/js/feather.min.js'); ?>"></script>
                <!--Custom JavaScript -->
                <script src="<?= base_url('assets/admin/dist/js/custom.min.js'); ?>"></script>
                <!--This page JavaScript -->
                <!--chartis chart-->
                <script src="<?= base_url('assets/admin/assets/libs/chartist/dist/chartist.min.js'); ?>"></script>
                <script
                    src="<?= base_url('assets/admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js'); ?>">
                </script>
                <!--c3 charts -->
                <script src="<?= base_url('assets/admin/assets/extra-libs/c3/d3.min.js'); ?>"></script>
                <script src="<?= base_url('assets/admin/assets/extra-libs/c3/c3.min.js'); ?>"></script>
                <script
                    src="<?= base_url('assets/admin/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>">
                </script>
                <script src="<?= base_url('assets/admin/dist/js/pages/dashboards/dashboard1.js'); ?>"></script>
                <script>
                $('.datepicker').datepicker({
                    autoclose: true,
                    todayHighlight: true
                });
                </script>
</body>


<!-- Mirrored from jthemes.net/themes/html/orghtml/mendy-admin/html/ltr/authentication-login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jul 2023 10:09:40 GMT -->

</html>