<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designarc.biz/demos/cleanex/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 18:15:36 GMT -->
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
                <h1>Services</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('Home/index')?>">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- feature-section -->
        <section class="feature-section service-page-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>our services</h6>
                    <h2>What We Do For Our Customers</h2>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will <br />uncover many web sites still in their infancy. Various versions have evolved over the years.</p>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">
                    <?php $i=1; foreach($data as $value): ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"></div>
                                    <h3><a href="<?= base_url('Home/service_details')?>"><?= $value->service_name ; ?></a></h3>
                                    <p><?= $value->short_description ; ?></p>
                                    <div class="link">
                                                <form method="POST" action="<?= base_url('Home/service_details')?>">
                                                    <input type="hidden" name="id" value="<?= $value->service_id ;?>">
                                                    <button class="btn btn-primary">Read more..</button>
                                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; endforeach; ?>
                        
                    </div>
                </div>
                <div class="lower-box">
                    <h2>Customer Service is Our First Preority.</h2>
                    <p><a href="<?= base_url('Home/service_details')?>">Cleanex Cleaning Company</a> <a href="<?= base_url('Home/service_details')?>">All aspects of Home Cleaning</a> <a href="<?= base_url('Home/service_details')?>">Commecial Cleaning</a> <a href="<?= base_url('Home/service_details')?>">Office Cleaning</a> <a href="<?= base_url('Home/service_details')?>">Move In/Out Cleaning</a> <a href="<?= base_url('Home/service_details')?>">All aspects of Cleaning etc</a>.</p>
                    <h3>Whatever your needs, Cleanex Cleaning contractors can offer you a courteous, reliable and professional service, please use our contact page for advice or to arrange a site visit and free quotation.</h3>
                </div>
            </div>
        </section>
        <!-- feature-section end -->


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

<!-- Mirrored from designarc.biz/demos/cleanex/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 18:15:36 GMT -->
</html>
