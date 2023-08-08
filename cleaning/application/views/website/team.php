<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designarc.biz/demos/cleanex/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 18:26:28 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Cleanex - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="<?= base_url('assets/website/images/favicon.ico')?>" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="<?= base_url('assets/website/css/font-awesome-all.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/flaticon.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/owl.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/bootstrap.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/jquery.fancybox.min.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/animate.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/color.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/style.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/responsive.css')?>" rel="stylesheet">

</head>


<body>


        <!-- page-title -->
        <section class="page-title">
            <div class="pattern-layer" style="background-image: url(<?= base_url('assets/website/images/shape/shape-45.png')?>);"></div>
            <figure class="image-layer"><img src="<?= base_url('assets/website/images/resource/page-title-1.png')?>" alt=""></figure>
            <div class="shape">
                <div class="shape-1" style="background-image: url(<?= base_url('assets/website/images/shape/shape-46.png')?>);"></div>
                <div class="shape-2" style="background-image: url(<?= base_url('assets/website/images/shape/shape-47.png')?>);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Team</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('Home/index')?>">Home</a></li>
                        <li><a href="<?= base_url('Home/about')?>">About Us</a></li>
                        <li>Team</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- team-page-section -->
        <section class="team-page-section">
            <div class="auto-container">
                <div class="title-inner">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                            <div class="sec-title">
                                <h6>meet the team</h6>
                                <h2>Our Dedicated Team</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text">
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-inner">
                    <div class="row clearfix">
                        <?php $i=1; foreach($data as $value): ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div >
                                        <figure class="image-box"><img src="<?= base_url($value->image_name); ?>" alt="" style="height:480px"></figure>
                                        
                                    </div>
                                    <div class="lower-content">
                                        <h3><?= $value->name ; ?></h3>
                                        <span class="designation"><?= $value->designation ; ?></span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-page-section end -->


        <!-- funfact-style-two -->
        <section class="funfact-style-two team-page">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-house-1"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="7088">0</span>
                            </div>
                            <p>Cleans Completed</p>
                        </div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-thumbs-up"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="100">0</span><span>%</span>
                            </div>
                            <p>Service Guarantee</p>
                        </div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-leader"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="1200">0</span> <span>+</span>
                            </div>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-broom"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="17">0</span>
                            </div>
                            <p>Team Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-style-two end -->

        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa fa-arrow-up"></i>
        </button>
        
    </div>


    <!-- jequery plugins -->
    <script src="<?= base_url('assets/website/js/jquery.js')?>"></script>
    <script src="<?= base_url('assets/website/js/popper.min.js')?>"></script>
    <script src="<?= base_url('assets/website/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/website/js/owl.js')?>"></script>
    <script src="<?= base_url('assets/website/js/wow.js')?>"></script>
    <script src="<?= base_url('assets/website/js/validation.js')?>"></script>
    <script src="<?= base_url('assets/website/js/jquery.fancybox.js')?>"></script>
    <script src="<?= base_url('assets/website/js/appear.js')?>"></script>
    <script src="<?= base_url('assets/website/js/scrollbar.js')?>"></script>
    <script src="<?= base_url('assets/website/js/isotope.js')?>"></script>
    <script src="<?= base_url('assets/website/js/nav-tool.js')?>"></script>
    <script src="<?= base_url('assets/website/js/jquery.nice-select.min.js')?>"></script> 

    <!-- main-js -->
    <script src="<?= base_url('assets/website/js/script.js')?>"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from designarc.biz/demos/cleanex/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 18:26:28 GMT -->
</html>
