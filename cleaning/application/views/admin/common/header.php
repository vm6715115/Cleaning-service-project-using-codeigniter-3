<!DOCTYPE html>
<html dir="ltr" lang="en">


<!-- Mirrored from jthemes.net/themes/html/orghtml/mendy-admin/html/ltr/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jul 2023 10:24:22 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/admin/my-pics/logo.png'); ?>">
    <title>Cleanex admin pannel - The Ultimate Multipurpose admin pannel</title>
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/admin/assets/extra-libs/c3/c3.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/admin/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/admin/dist/css/style.min.css" rel="stylesheet'); ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="<?= base_url('Home/index'); ?>" class="logo" style="color:white;">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="<?= base_url('assets/admin/my-pics/logo.png')?>" alt="homepage"
                                    class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="<?= base_url('assets/admin/my-pics/logo-2.png')?>" alt="homepage"
                                    class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->

                        </a>
                        <a class="sidebartoggler d-none d-lg-block" href="javascript:void(0)"
                            data-sidebartype="mini-sidebar">
                            <i data-feather="menu"></i>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-block"><img src="<?= base_url('assets/admin/my-pics/logo.png')?>">
                            </span>
                            <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span>
                        </a>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="#"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-3 font-normal d-none d-sm-inline-block pro-name"><span>Hello,</span>
                                    Vishal Kumar Maurya</span>
                                <img src="<?= base_url('assets/admin/my-pics/vishal.jpg'); ?>" alt="user"
                                    class="rounded-circle" width="40">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <div class="d-flex no-block align-items-center p-3 bg-light mb-2">
                                    <div class="">
                                        <img src="<?= base_url('assets/admin/my-pics/vishal.jpg'); ?>" alt="user"
                                            class="rounded-circle" width="60">
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="mb-0">Vishal Kumar Maurya</h4>
                                        <p class="mb-0">vm6715115@gmail.com</p>
                                    </div>
                                </div>
                                <div class="profile-dis scrollable">
                                    <a href="#"><?= $this->session->userdata('name');?></a>
                                    <a class="dropdown-item" href="<?= base_url('AdminLogin/logout'); ?>">
                                        <i class="fa fa-power-off mx-1"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->

                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->