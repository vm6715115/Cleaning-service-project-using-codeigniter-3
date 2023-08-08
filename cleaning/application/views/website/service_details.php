<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designarc.biz/demos/cleanex/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 18:16:43 GMT -->
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
                    <h1>Single Service</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('Home/index')?>">Home</a></li>
                        <li>Single Service</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- service-details -->
        <section class="service-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar">
                            <!-- <div class="category-widget sidebar-widget">
                                <ul class="category-list clearfix">
                                    <li><a href="<?= base_url('service-details.html')?>" class="current">Home Cleaning</a></li>
                                    <li><a href="<?= base_url('service-details.html')?>">Window Cleaning</a></li>
                                    <li><a href="<?= base_url('service-details.html')?>">Carpet Cleaning</a></li>
                                    <li><a href="<?= base_url('service-details.html')?>">Office Cleaning</a></li>
                                    <li><a href="<?= base_url('service-details.html')?>">Move In/Out Cleaning</a></li>
                                    <li><a href="<?= base_url('service-details.html')?>">After Renovation</a></li>
                                    <li><a href="<?= base_url('service-details.html')?>">Residentail Cleaning</a></li>
                                    <li><a href="<?= base_url('service-details.html')?>">Commercial Cleaning</a></li>
                                </ul>
                            </div> -->
                            <div class="contact-widget sidebar-widget">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="<?= base_url('assets/website/images/resource/sidebar-1.jpg')?>" alt=""></figure>
                                    </div>
                                    <div class="content-box">
                                        <h3><span>Available</span> for any type of Cleaning Service</h3>
                                        <h2>We can help</h2>
                                        <div class="btn-box centred">
                                            <a href="<?= base_url('Home/contact')?>" class="theme-btn btn-two">Contact us</a>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="download-widget sidebar-widget">
                                <div class="inner-box">
                                    <a href="<?= base_url('assets/website/my-pics/cleaning-brochure.docx')?>"><span>Download Brochure</span></a>
                                </div>
                            </div><br><br>
                            <a href="<?= base_url('Home/appointment')?>">
                            <div class="appointment-form-button">
                               
                                    <button  class="theme-btn btn-two">Make an appointment</button>  
                            </div> </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <div class="content-one">
                                <h2><?= $data->service_name ; ?></h2>
                                <p><?= $data->long_description ; ?></p>
                            </div>
                            <div class="content-two">
                                <div class="row clearfix">
                                    <div class="col-lg-7 col-md-6 col-sm-12 content-column">
                                        <div class="content-box">
                                            <h3>Service Benefits</h3>
                                            <p><?= $data->service_benifits ; ?></p>
                                            <ul class="list-one clearfix">
                                                <li>To give our best for our customer.</li>
                                                <li>Professional team do work</li>
                                                <li>Provide quality Cleaning.</li>
                                                <li>Flexible and Cost-Effective</li>
                                            </ul>
                                            <ul class="list-two clearfix">
                                                <li>Efficiently unleash cross-media informatio</li>
                                                <li>Quickly maximize timely deliverables</li>
                                                <li>Dramatically maintain clicks-and-mortar solutions</li>
                                                <li>Efficiently unleash cross-media informatio</li>
                                                <li>Quickly maximize timely deliverables</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?= base_url('assets/website/images/service/service-details-1.jpg')?>" alt=""></figure>
                                            <figure class="image"><img src="<?= base_url('assets/website/images/service/service-details-2.jpg')?>" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-details end -->

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

<!-- Mirrored from designarc.biz/demos/cleanex/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 18:17:06 GMT -->
</html>
